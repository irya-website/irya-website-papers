"""
make_irya_publication_list.py

Creates the web page publication_list2.php, which contains lists of
refereed journal publications by members of the IRyA, organized by
year from 2003 to the present.  Also creates the web page
latest_publication2.php with the most recent paper.

Usage:

    make_irya_publication_list.py OUTPUT_FOLDER

followed by

    make_journal_histogram.py OUTPUT_FOLDER

to generate the graphic files of the histograms. 

Files will be written to OUTPUT_FOLDER

See accompanying file README.md for further options.

Authors: Will Henney and Jane Arthur, 2022,2023
"""

# Standard library imports
import sys
import json
import datetime
import re
from textwrap import dedent
import html
from typing import Tuple  # required for earlier python versions
from collections import Counter

# Third-party library
# Install with "pip install ads"
# Requires API key, see step 2 of "Getting Started" at https://ads.readthedocs.io/en/latest/
import ads
from unidecode import unidecode

PUB_LIST_FILE = "publication_list2.php"
LATEST_PUB_FILE = "latest_publication2.php"
DIAGNOSTIC_FILE = "nonstandard_variants.txt"
JOURNAL_DATA_FILE = "journal_data.json"


# Add bibcodes to this list in order to inspect for debugging purposes
DEBUG_BIBCODES = [
    # "2020ApJ...905...25G",  # Failed highlighting in author list
    # "2007JKAS...40..137K",  # Stan paper with "&" in affiliation
]

# We look for these different variants of the institute name
#
# Any special cases due to journal errors should be added to the end
# of this list
irya_variants = [
    "CRyA",
    "IRyA",
    "Radioastronomía y Astrofísica",
    "Radiostronomía y Astrofísica",  # Ricardo Gonzalez paper
    "Radioastronomí a y Astrofí sica",  # For Gustavo Bruzual 2021 paper
    "Radioastronomía y Astrofísca",  # Stan paper
    "Radioastronomía y Astrofsica",  # In anticipapation
    "Radioastromomía y Astrofísica",  # Just in case
]

# List of cases where an author should not count as a member of the
# IRyA after a given date, even if the paper lists IRyA as their
# affiliation. Each element of the list should be a 2-tuple of
# (author, date), where the date is in format "YYYY/MM".  In the case
# where the surname is unique among IRyA authors, the name should just
# be the surname. Otherwise, all possible variations of "last, first"
# and "last, initial" should be listed separately, each with the same
# date.
drop_authors_after_dates = [
    ("Rodriguez-Gomez", "2022/09"),
    ("Lora", "2022/09"),
    ("Naranjo-Romero", "2022/09"),
    ("Loughnane", "2022/09"),
    # ("Henney", "2022/04"),
]

# List of bibcode components for publications that we want to exclude
drop_pub_types = [
    ".tmp",                     # MNRAS early publication
    ".conf",                    # Conference proceedings
]

# All except the first 3 variants are mis-spellings, about which we
# may want to report diagnostics
nonstandard_variants = irya_variants[3:]

# List for saving papers that we find with nonstandard affiliation
nonstandard_papers = []

affstring = "(" + " OR ".join([f'"{_}"' for _ in irya_variants]) + ")"

# To eliminate false positives in Italy, we have an auxiliary check on UNAM or Morelia
unam_variants = [
    '"UNAM"',
    '"Mexico"',
    '"Morelia"',
]
affstring2 = "(" + " OR ".join(unam_variants) + ")"


# These are the fields that we want the ADS query to give us
fields = [
    "id",
    "bibcode",
    "title",
    "author",
    "aff",
    "year",
    "pub",
    "volume",
    "page",
    "pubdate",
]


def fuzzy(s, squeeze=True):
    """Transform string for a fuzzy comparison

    1. Decode HTML entities: "&amp;" -> "&"
    2. Eliminate accents: "Astrofísica" -> "Astrofisica"
    3. Fold case: "Astrofísica" -> "astrofisica"
    4. If optional argument `squeeze` is True, then remove
       non-word characters: "onom&ia y astro" -> "onomiayastro"
    """
    rslt = unidecode(html.unescape(s)).casefold()
    if squeeze:
        rslt = re.sub(r"\W", "", rslt)
    return rslt


def check_drop_author_on_date(author, date):
    """True if author is due to be dropped on given date"""
    for _author, _date in drop_authors_after_dates:
        if _author in author and date > _date:
            # Case that author should be dropped
            return True
    # Case that author should not be dropped
    return False

def check_for_excluded_pubs(bibcode):
    """True if bibcode matches list of publications to drop"""
    for s in drop_pub_types:
        if s in bibcode:
            return True
    return False
    

def mark_irya_affiliations(paper):
    """Highlight authors with IRyA affiliation

    This mutates the paper.author list, so should be called only once
    """
    year_month = "/".join(paper.pubdate.split("-")[:-1])
    n_marked = 0
    for i, [author, affil] in enumerate(zip(paper.author, paper.aff)):
        for variant in irya_variants:
            if fuzzy(variant) in fuzzy(affil):
                if check_drop_author_on_date(author, year_month):
                    print("Dropped author event: ", author)
                else:
                    paper.author[i] = f"<strong>{author}</strong>"
                    n_marked += 1
                # Stop checking variants. Advance to next author
                break
    return n_marked


def check_nonstandard_affiliations(paper):
    """Check for common mispellings with IRyA affiliation"""
    for i, [author, affil] in enumerate(zip(paper.author, paper.aff)):
        for variant in nonstandard_variants:
            if fuzzy(variant, squeeze=False) in fuzzy(affil, squeeze=False):
                nonstandard_papers.append([paper.bibcode, i, author, affil])
                break


def make_author_list(paper, nmax=20):
    """Format list of authors but hide full list if very long

    Adds javascript toggle button to show full list
    """
    if len(paper.author) <= nmax:
        return "; ".join(paper.author)
    else:
        rslt = "; ".join(paper.author[:nmax])
        rslt += f'; <span id="{paper.bibcode}.authors" style="display: none;">'
        rslt += "; ".join(paper.author[nmax:])
        rslt += dedent(
            f"""\
            </span><span id="{paper.bibcode}.button"></span>
            <script>
            toggleAuthors('{paper.bibcode}', {len(paper.author)}, 0);
            </script>
            """
        )
        return rslt


def format_paper(paper):
    """Make an html list item for a single paper

    Paper title is link to ADS page, followed by author list, date, journal, volume, page
    """
    bibcode_link = dedent(
        f"""\
        <a href="https://ui.adsabs.harvard.edu/abs/{paper.bibcode}" target="_blank">
        <i>{paper.title[0]}</i>
        </a>
        """
    )
    author_list = make_author_list(paper)
    year_month = "/".join(paper.pubdate.split("-")[:-1])
    rslt = "<li><p>\n"
    rslt += bibcode_link
    rslt += "<br/>\n" + author_list + "\n<br/>\n"
    try:
        rslt += ", ".join([year_month, paper.pub, paper.volume, paper.page[0]]) + "\n"
    except TypeError:
        # Case where volume is missing
        rslt += ", ".join([year_month, paper.pub, paper.page[0]]) + "\n"
    rslt += "</p></li>\n"
    return rslt


# This javascript header goes at top of the files.  We believe it was
# written by Vicente Rodríguez Gómez.  Additional function by Jane
# Arthur to hide/show the histogram graphics
script_header = """\
<script>
function toggleAuthors(bibcode, numAuthors, longList) {
  var x = document.getElementById(bibcode + '.authors');
  var y = document.getElementById(bibcode + '.button');

  var showLess = ' <a href="javascript:void(0)" onclick="toggleAuthors(' + "'" + bibcode + "'" + ', ' + numAuthors + ', 0)" style="margin-left: 6px;"><em>show less</em></a>';
  var showMore = ' <a href="javascript:void(0)" onclick="toggleAuthors(' + "'" + bibcode + "'" + ', ' + numAuthors + ', 1)" style="margin-left: 6px;"><em>show ' + (numAuthors-20) + ' more</em></a>';

  if (longList === 0) {
    x.style.display = 'none';
    y.innerHTML = showMore;
  } else {
    x.style.display = 'inline';
    y.innerHTML = showLess;
  }
};

/* WJH 2023-07-31: simpler function for turning visibility on/off */ 

/*function toggleVisibility(id) {
  var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}*/
</script>
"""


def query_years(years: list) -> Tuple[str, str, dict]:
    """Execute all the queries and construct the pages"""

    pub_list_page = script_header
    latest_pub_page = script_header

    # Start outer div
    pub_list_page += """\
    <div class="row">
    """

    # Make navigation sidebar with links for each year
    pub_list_page += """\
    <div class="dropdown col-4">
        <button id="dyears" class="btn btn-sm btn-light text-sm" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Selecciona un año <em>(select a year)</em> <i class="fas fa-angle-down ml-4"></i>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dyears" role="tablist">
    """

    for year in years:
        active = "active" if year == this_year else ""
        pub_list_page += (
            f"""\
                <li role="presentation">
                    <button class="dropdown-item {active}" id="{year}-tab" data-bs-toggle="tab" data-bs-target="#P{year}" type="button"
                    role="tab" aria-controls="P{year}" aria-selected="true">{year}</button>
                </li>
            """+ "\n"
        )

    # End navigation sidebar
    pub_list_page += """\
    </ul>
    </div>
    """

    # Start div with the main content
    pub_list_page += """\
    <div class="tab-content publicaciones">
    """

    journals_by_year = {}
    for year in years:
        tab_pane = "tab-pane fade show active" if year == this_year else "tab-pane fade"
        # Make a single ADS query for each year
        papers = list(
            ads.SearchQuery(
                q=f"aff:{affstring}",
                fq=f"aff:{affstring2} AND property:refereed",
                fl=fields,
                year=f"{year}",
                rows=2000,
                sort="date+desc",
            )
        )
        
        # Remove unwanted publications
        # For instance, MNRAS early access, or conference proceedings
        papers = [_ for _ in papers if not check_for_excluded_pubs(_.bibcode)]
        

        # Start a div for this year with list of papers and histogram graphic
        pub_list_page += dedent(
            f"""\
            <div class="{tab_pane}" id="P{year}" role="tabpanel" aria-labelledby="{year}-tab">
                <div class="row row-header">
                    <h3>Publications {year}</h3>
                    <div class="div.col-2">
                        <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#hist-{year}" aria-expanded="false" aria-controls="hist-{year}">
                            Histogram
                        </button>
                    </div>
                </div>
                
                <div class="collapse" id="hist-{year}">
                    <div class="histogram">
                        <img id="hist-{year}" src="sync_files/journal_histogram_{year}.jpg" height="300">
                    </div>
                </div>            
            <ol>      
            """
        )

        # Initialise counter for journals
        journal_counter = Counter()

        # Add a list item for each paper
        filtered_papers = []
        for paper in papers:
            check_nonstandard_affiliations(paper)
            n_marked = mark_irya_affiliations(paper)

            if n_marked == 0:
                print("Paper not included due to all irya authors being on drop list")
                continue

            # Paper has passed the checks so add it to page and to
            # list of filtered papers
            pub_list_page += format_paper(paper)
            filtered_papers.append(paper)

            if paper.bibcode in DEBUG_BIBCODES:
                print("*** DEBUG_BIBCODE", paper.bibcode)
                print(paper.items())

            # Increment journal counter
            journal_counter[paper.pub] += 1

        # Close the list and close the div for this year
        pub_list_page += dedent(
            """\
            </ol>
            </div>
            """
        )
        # Also add latest publication to a separate page
        if year == this_year:
            latest_pub_page += format_paper(filtered_papers[0])
        # Save this year's journal counter
        journals_by_year[year] = journal_counter

    # Close div with the main content
    pub_list_page += """\
    </div>
    """

    # Close outer div
    pub_list_page += """\
    </div>
    """

    return pub_list_page, latest_pub_page, journals_by_year


def dump_nonstandard():
    nauthors = len(nonstandard_papers)
    # Count unique bibcodes
    npapers = len(set([_[0] for _ in nonstandard_papers]))

    s = dedent(
        f"""\
        ############################################################
        # Non-standard spellings in IRyA affiliations 2003-present
        #
        # Total: {nauthors} authors in {npapers} papers
        ############################################################
        """
    )
    for bibcode, irank, author, affil in nonstandard_papers:
        s += dedent(
            f"""
            {bibcode}
            Author {irank + 1}: {author}
            Affil: {affil}
            """
        )
    with open(f"{OUTPUT_FOLDER}/{DIAGNOSTIC_FILE}", "w") as f:
        f.write(s)


if __name__ == "__main__":
    try:
        OUTPUT_FOLDER = sys.argv[1]
    except IndexError:
        sys.exit(f"Usage: {sys.argv[0]} OUTPUT_FOLDER [variant]")

    # Optionally write a file with the mispellings
    try:
        DO_SAVE_VARIANTS = "variant" in str(sys.argv[2])
    except IndexError:
        DO_SAVE_VARIANTS = False

    start_year = 2003
    this_year = datetime.date.today().year
    years = list(reversed(range(start_year, this_year + 1)))
    pub_list_page, latest_pub_page, journal_data = query_years(years)

    # Write out the two files
    with open(f"{OUTPUT_FOLDER}/{PUB_LIST_FILE}", "w") as f:
        f.write(pub_list_page)
    with open(f"{OUTPUT_FOLDER}/{LATEST_PUB_FILE}", "w") as f:
        f.write(latest_pub_page)

    # Write out the journal data
    with open(f"{OUTPUT_FOLDER}/{JOURNAL_DATA_FILE}", "w") as f:
        json.dump(journal_data, f, indent=4)

    if DO_SAVE_VARIANTS:
        dump_nonstandard()
