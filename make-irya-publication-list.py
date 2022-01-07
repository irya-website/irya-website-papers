"""
make-irya-publication-list.py

Creates the web page publication_list.php, which contains lists of
refereed journal publications by members of the IRyA, organized by
year from 2003 to the present.  Also creates the web page
latest_publication.php with the most recent paper.

Authors: Will Henney and Jane Arthur, 2022
"""

import ads
import sys
import json
import datetime
from textwrap import dedent

start_year = 2003
this_year = datetime.date.today().year

years = list(reversed(range(start_year, this_year + 1)))

# We look for these different variants of the institute name
irya_variants = [
    "CRyA",
    "IRyA",
    "Radioastronomía y Astrofísica",
    "Radioastronomia y Astrofisica",
]
affstring = "(" + " OR ".join([f'"{_}"' for _ in irya_variants]) + ")"

# To eliminate false positives in Italy, we have an auxiliary check on UNAM or Morelia
unam_variants = [
    '"UNAM"',
    '("Universidad" AND "México")',
    '("Universidad" AND "Mexico")',
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


def mark_irya_affiliations(paper):
    """Highlight authors with IRyA affiliation

    This mutates the paper.author list, so should be called only once
    """
    for i, [author, affil] in enumerate(zip(paper.author, paper.aff)):
        for variant in irya_variants:
            if variant in affil:
                paper.author[i] = f"<strong>{author}</strong>"
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
    rslt += ", ".join([year_month, paper.pub, paper.volume, paper.page[0]]) + "\n"
    rslt += "</p></li>\n"
    return rslt


# This javascript header goes at top of the files.  We believe it was
# written by Vicente Rodríguez
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
</script>
"""

pub_list_page = script_header
latest_pub_page = script_header

# Start outer div
pub_list_page += """\
<div class="row-fluid">
"""

# Make navigation sidebar with links for each year
pub_list_page += """\
<div id="sidebar" class="span1">
<ul class="nav nav-pills nav-stacked mod-list">
"""

for year in years:
    pub_list_page += (
        f'<li style="width: 58px;"><a href="#{year}" data-toggle="pill">{year}</a></li>'
        + "\n"
    )

# End navigation sidebar
pub_list_page += """\
</ul>
</div>
"""

# Start div with the main content
pub_list_page += """\
<div class="tab-content span11">
"""

for year in years:
    tab_pane = "tab-pane active" if year == this_year else "tab-pane"
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
    # Remove MNRAS early publication papers from list
    papers = [_ for _ in papers if not ".tmp." in _.bibcode]

    # Start a div for this year with list of papers
    pub_list_page += dedent(
        f"""\
        <div class="{tab_pane}" id="{year}">
        <h4 style="text-indent: 10px;">Publications {year}</h4>
        <ol>      
        """
    )

    # Add a list item for each paper
    for paper in papers:
        mark_irya_affiliations(paper)
        pub_list_page += format_paper(paper)

    # Close the list and close the div for this year
    pub_list_page += dedent(
        """\
        </ol>
        </div>
        """
    )
    # Also add latest publication to a separate page
    if year == this_year:
        latest_pub_page += format_paper(papers[0])


# Close div with the main content
pub_list_page += """\
</div>
"""

# Close outer div
pub_list_page += """\
</div>
"""

# Write out the two files
with open("publication_list.php", "w") as f:
    f.write(pub_list_page)

with open("latest_publication.php", "w") as f:
    f.write(latest_pub_page)
