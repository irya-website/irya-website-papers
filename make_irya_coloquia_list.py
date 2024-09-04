"""
make_irya_coloquia_list.py

Creates web pages containing lists of colloquia from 2014 to present
in English and Spanish versions. Also creates the upcoming colloquia
web page for insertion into main IRyA web page.
 
Usage:

    make_irya_coloquia_list.py OUTPUT_FOLDER

Requires:

    database Colloquium.csv exists in current directory. 
    this is created from a Google sheets database from the sync files.

Creates:

    colloquium_en_list2.php
    upcoming_en_coll2.php
    colloquium_es_list2.php
    upcoming_es_coll2.php

Files will be written to OUTPUT_FOLDER

Author: Jane Arthur/Leonardo Arroyo, 2024

"""
import sys
import csv
import datetime
from textwrap import dedent
import html
import json

INFILE = "Colloquium.csv"
OUTPUT_FOLDER = sys.argv[1]
COLL_LIST_FILE_EN = "colloquium_en_list2.php"
UPCOMING_COLL_FILE_EN = "upcoming_en_coll2.php"
COLL_LIST_FILE_ES = "colloquium_es_list2.php"
UPCOMING_COLL_FILE_ES = "upcoming_es_coll2.php"

def query_years(df,years):
    # today
    F_NEXT_COLL = True
    
    # construct the web pages
    coll_list_page_en = ""
    upcoming_coll_page_en = ""
    prev_coll_format_en = ""

    coll_list_page_es = ""
    upcoming_coll_page_es = ""
    prev_coll_format_es = ""


    
    # Start contruction dropdown menu years - English/Spanish
    dropdown_menu_en = f"""\
    <div class="row">
        <div class="dropdown col">
            <button id="dyears" class="btn btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Select a year <i class="fas fa-angle-down ml-4"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dyears" role="tablist">    
    """+"\n"

    dropdown_menu_es = f"""\
    <div class="row">
        <div class="dropdown col">
            <button id="dyears" class="btn btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Selecciona un año <i class="fas fa-angle-down ml-4"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dyears" role="tablist">
    """+"\n"
    
    #go through years generating dropdown-items
    is_active = True
    for year in years:
        active = ""
        if is_active  : active = "active"
       
        is_active = False
            
        dropdown_menu_en += f"""\
                <li role="presentation">
                    <button class="dropdown-item {active}" id="{year}-tab" data-bs-toggle="tab" data-bs-target="#C{year}" 
                            type="button" role="tab" aria-controls="C{year}" aria-selected="true">{year}
                    </button>
                </li>
        """+ "\n"
        
        dropdown_menu_es += f"""\
                <li role="presentation">
                    <button class="dropdown-item {active}" id="{year}-tab" data-bs-toggle="tab" data-bs-target="#C{year}" 
                            type="button" role="tab" aria-controls="C{year}" aria-selected="true">{year}
                    </button>
                </li>
        """+ "\n"
    
    # End navigation dropdown 
    dropdown_menu_en += """\
            </ul>
        </div>
    </div>
    """
    dropdown_menu_es += """\
            </ul>
        </div>
    </div>
    """

    #Put dropdown menu on top page
    coll_list_page_en = dropdown_menu_en + "\n"
    coll_list_page_es = dropdown_menu_es + "\n"

    
    #Initialize content-tabs
    coll_list_page_en += f"""<div class="tab-content mt-3">"""+"\n"
    coll_list_page_es += f"""<div class="tab-content mt-3">"""+"\n"
    
    # go through years generating tab-pane for years
    is_active = True
    for year in years:
        colloqs = [coll for coll in df if str(year) in coll[0]]
        
        active = ""
        if is_active : active="active show" 
        
        # start a tabpanel for this year - English
        coll_list_page_en += dedent(
            f"""\
                <div class="tab-pane fade {active}" id="C{year}" role="tabpanel" aria-labelledby="{year}-tab">
                    <h3>Colloquia {year}</h3>
            """
        )

        # start a tabpanel for this year - Spanish
        coll_list_page_es += dedent(
            f"""\
                <div class="tab-pane fade {active}" id="C{year}" role="tabpanel" aria-labelledby="{year}-tab">
                    <h3>Coloquios {year}</h3>
            """
        )
        
        is_active = False

        # format colloquia
        for coll in colloqs:
            this_coll_format_en = createEntry_en(coll)
            this_coll_format_es = createEntry_es(coll)
            coll_list_page_en += this_coll_format_en
            coll_list_page_es += this_coll_format_es
            
            # identify upcoming colloquium
            cyr,cmth,cday = coll[0].split('/')
#DEBUG            print('cyr ',cyr,' cmth ',cmth,' cday ',cday)
            if F_NEXT_COLL :
                upcoming_coll_page_en = prev_coll_format_en
                upcoming_coll_page_es = prev_coll_format_es
                if int(cyr) < int(today_yr) :
                    F_NEXT_COLL = False
                else :
                    if int(cmth) < int(today_mth) :
                        F_NEXT_COLL = False
                    else :
                        if int(cday) < int(today_day) :
                            F_NEXT_COLL = False
                            
            prev_coll_format_en = this_coll_format_en
            prev_coll_format_es = this_coll_format_es
                         
        #close the tabpanel for this year - English
        coll_list_page_en += dedent(
            """\
            </div>
            """
        )
        #close the tabpanel for this year - Spanish
        coll_list_page_es += dedent(
            """\
            </div>
            """
        )

    #Close content-tabs
    coll_list_page_en += "</div>"
    coll_list_page_es += "</div>"
    
    return coll_list_page_en, upcoming_coll_page_en,coll_list_page_es, upcoming_coll_page_es
        
def createEntry_en(dfc):
    date = dfc[0]
    special = dfc[1]
    name = dfc[2]
    inst = dfc[3]
    title = dfc[4]
    titulo = dfc[5]
    summary = dfc[6]
    resumen = dfc[7]
    host = dfc[8]
    file_id = dfc[9]
    video = dfc[10]

    
    cur_html = f"""\
    <div class="row coloquio-item">
        <div class="col-2 coloquio-date">
            {special} {date}
        </div>
        <div class="col-10 coloquio-body">
            <strong>{html.escape(name)}</strong>, {html.escape(inst)}
    """
    if host != '' :
        cur_html += f"""        <br/>Host: {html.escape(host)}"""
    
    cur_html += f"""\n<br>            <a data-bs-toggle="collapse" href="#collapse{date.replace('/', '')}" role="button" aria-expanded="false" aria-controls="collapse{date.replace('/', '')}">
                {html.escape(title) if title != '' else "No Title"}
            </a>
            <div class="collapse text-sm" id="collapse{date.replace('/', '')}">
                        {html.escape(summary)}
                """
    
    if file_id != '' or video != '' :
        cur_html += """<div class="text-right descargas"> """
        if file_id != '' :
            cur_html += '           <a href="https://drive.google.com/uc?export=download&id=' + file_id + '">Download Presentation</a>'
            if video != '':
                cur_html += ' | '
        if video != '':
            cur_html += '           <a href="' + video + '" target="_blank" rel="noopener noreferrer">Watch Video</a>'
        cur_html += """</div>"""+"\n"
                    
    cur_html += """\
            </div>
        </div>
    </div><hr>
    """+"\n"
        
    return cur_html

def createEntry_es(dfc):
    date = dfc[0]
    special = dfc[1]
    name = dfc[2]
    inst = dfc[3]
    title = dfc[4]
    titulo = dfc[5]
    summary = dfc[6]
    resumen = dfc[7]
    host = dfc[8]
    file_id = dfc[9]
    video = dfc[10]

    cur_html = f"""\
    <div class="row coloquio-item">
        <div class="col-2 coloquio-date">
            {special} {date}
        </div>
        <div class="col-10 coloquio-body">
            <strong>{html.escape(name)}</strong>, {html.escape(inst)}
    """
    if host != '' :
        cur_html += f"""        <br/>Host: {html.escape(host)}"""
    
    cur_html += f"""\n<br>            <a data-bs-toggle="collapse" href="#collapse{date.replace('/', '')}" role="button" aria-expanded="false" aria-controls="collapse{date.replace('/', '')}">
                {html.escape(titulo) if titulo != '' else "No Title"}
            </a>
            <div class="collapse text-sm" id="collapse{date.replace('/', '')}">
                        {html.escape(resumen)}
                """
    cur_html += """<div class="text-end mt-3"> """
    if file_id != '' or video != '' :
        if file_id != '' :
            cur_html += '           <a href="https://drive.google.com/uc?export=download&id=' + file_id + '">Download Presentation</a>'
            if video != '':
                cur_html += ' | '
        if video != '':
            cur_html += '           <a href="' + video + '" target="_blank" rel="noopener noreferrer">Watch Video</a>'
    cur_html += """</div>"""+"\n"
                    
    cur_html += """\
            </div>
        </div>
    </div><hr>
    """+"\n"
    
    return cur_html


if __name__ == "__main__":

    start_year = 2014
    this_year = datetime.date.today().year
    years = list(reversed(range(start_year, this_year + 1)))
    today_yr = datetime.date.today().year
    today_mth = datetime.date.today().month
    today_day = datetime.date.today().day
    F_NEXT_COLL = True
#DEBUG:    print('today',today_yr,today_mth,today_day)


    dfdate = []
    df = []
    with open(INFILE, mode='r',newline='') as csv_file:
        csv_reader = csv.reader(csv_file)
        line_count = 0
        column_names = {}

        for row in csv_reader:
            if line_count == 0:
                column_names = ", ".join(row)
                line_count += 1
            else:
                line_count += 1

                dfdate.append(row[0])
                df.append(row)
                
    coll_list_page_en, upcoming_coll_page_en, coll_list_page_es, upcoming_coll_page_es = query_years(df,years)

    # write out file
    with open(f"{OUTPUT_FOLDER}/{COLL_LIST_FILE_EN}", "w") as f:
        f.write(coll_list_page_en)

    with open(f"{OUTPUT_FOLDER}/{UPCOMING_COLL_FILE_EN}", "w") as f:
        f.write(upcoming_coll_page_en)

    # write out file

    with open(f"{OUTPUT_FOLDER}/{COLL_LIST_FILE_ES}", "w") as f:
        f.write(coll_list_page_es)

    with open(f"{OUTPUT_FOLDER}/{UPCOMING_COLL_FILE_ES}", "w") as f:
        f.write(upcoming_coll_page_es)

#DEBUG
#    print(' upcoming EN ',upcoming_coll_page_en)
#    print(' upcoming ES ',upcoming_coll_page_es)

