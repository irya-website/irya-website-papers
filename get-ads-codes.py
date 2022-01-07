import ads
import sys
import json
import datetime
from textwrap import dedent

start_year = 2003
this_year = datetime.date.today().year

# try:
#     start_year = int(sys.argv[1])
# except:
#     sys.exit(f"Usage {sys.argv[0]} START_YEAR")

years = list(reversed(range(start_year, this_year + 1)))

irya_variants = [
    "CRyA",
    "IRyA",
    "Radioastronomía y Astrofísica",
    "Radioastronomia y Astrofisica",
]
affstring = "(" + " OR ".join([f'"{_}"' for _ in irya_variants]) + ")"

unam_variants = [
    '"UNAM"',
    '("Universidad" AND "México")',
    '("Universidad" AND "Mexico")',
    '"Morelia"',
]
affstring2 = "(" + " OR ".join(unam_variants) + ")"


#
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
    for i, [author, affil] in enumerate(zip(paper.author, paper.aff)):
        for variant in irya_variants:
            if variant in affil:
                paper.author[i] = f"<strong>{author}</strong>"
                break


def make_author_list(paper, nmax=20):
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

pub_list_page += """\
<div id="sidebar" class="span1">
<ul class="nav nav-pills nav-stacked mod-list">
"""

for year in years:
    pub_list_page += (
        f'<li style="width: 58px;"><a href="#{year}" data-toggle="pill">{year}</a></li>'
        + "\n"
    )

pub_list_page += """\
</ul>
</div>
"""


pub_list_page += """\
<div class="tab-content span11">
"""

# Make a separate ADS query for each year
for year in years:
    tab_pane = "tab-pane active" if year == this_year else "tab-pane"
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
    pub_list_page += dedent(
        f"""\
        <div class="{tab_pane}" id="{year}">
        <h4 style="text-indent: 10px;">Publications {year}</h4>
        <ol>      
        """
    )
    for paper in papers:
        mark_irya_affiliations(paper)
        pub_list_page += format_paper(paper)

    pub_list_page += dedent(
        """\
        </ol>
        </div>
        """
    )
    # Also add latest publication to a separate page
    if year == this_year:
        latest_pub_page += format_paper(papers[0])

pub_list_page += """\
</div>
"""

# Close outer div
pub_list_page += """\
</div>
"""

with open("publication_list.php", "w") as f:
    f.write(pub_list_page)

with open("latest_publication.php", "w") as f:
    f.write(latest_pub_page)
