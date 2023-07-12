from matplotlib import pyplot as plt
import numpy as np
import pandas as pd
import seaborn as sns
import json
import sys
from collections import Counter

key_journals = {
    "AJ": "The Astronomical Journal",
    "A&A": "Astronomy and Astrophysics",
    "ApJ": "The Astrophysical Journal",
    "MNRAS": "Monthly Notices of the Royal Astronomical Society",
    "RMxAA": "Revista Mexicana de Astronomia y Astrofisica",
    "Other": "XXXX",
}

folder = sys.argv[1]
# Load the data
with open(f"{folder}/journal_data.json", "r") as f:
    data = json.load(f)

# Find largest number of publications/year/journal
MAX_COUNT = 59

# Separate plot for each year
for year, count_data in data.items():
    count_dict = {k: 0 for k in key_journals.keys()}
    for journal, count in count_data.items():
        for abbr, full_journal_name in key_journals.items():
            if journal.startswith(full_journal_name):
                count_dict[abbr] += count
                break
        else:
            count_dict["Other"] += count

    print(year, count_dict)
    df = pd.DataFrame.from_dict(count_dict, orient="index", columns=["count"])
    print(df)
    # Make the plot
    fig, ax = plt.subplots(figsize=(4, 3))
    sns.set_color_codes("deep")
    sns.barplot(y="index", x="count", data=df.reset_index(), ax=ax, color="b")
    ax.set_xlabel("Number of publications")
    ax.set_ylabel("Journal")
    ax.set_xlim(0, MAX_COUNT)
    ax.text(
        0.9,
        0.1,
        f"{year}",
        transform=ax.transAxes,
        ha="right",
        va="bottom",
        zorder=100,
        fontsize="xx-large",
    )
    sns.despine()
    plotfile = f"{folder}/journal_histogram_{year}.jpg"
    fig.savefig(plotfile, bbox_inches="tight", dpi=150)
    plt.close(fig)
