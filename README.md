# Publication list for IRyA website

Python script that uses ADS to construct web page with lists of refereed publications by researchers from the Instituto de Radioastronomía y Astrofísica, Universidad Nacional Autónoma de México.

The output from this script can be seen [here.](https://www.irya.unam.mx/web/en/research/publications)

## Install dependencies

```sh
pip install ads
pip install unidecode
```

## Usage

```sh
python make-irya-publication-list.py OUTPUT_FOLDER
```
where `OUTPUT_FOLDER` is where you want the files to be written.


## Customization

Variables that may need to be changed are near the top of the file.

### Names of files to save
```python
PUB_LIST_FILE = "publication_list2.php"
LATEST_PUB_FILE = "latest_publication2.php"
```

Currently, the file is run by a shell script that checks the exit status before copying the files to their final names on the web server.

### Variants of IRyA name

```python
irya_variants = [
    "CRyA",
    "IRyA",
    "Radioastronomía y Astrofísica",
    "Radiostronomía y Astrofísica",  # Ricardo Gonzalez paper
    "Radioastronomí a y Astrofí sica",  # For Gustavo Bruzual 2021 paper
]
```

We now use a fuzzy matching method that deals automatically with any accent errors in specifying the institute name.  But missing letters and extra spaces need to be checked for explicitly.  Any new variants that are spotted in the wild should be added to this list.

Diagnostics of the mis-spelled variants can be written to a file by giving a second argument `variant` when running the script:
```sh
python make-irya-publication-list.py OUTPUT_FOLDER variant
```
This will write a file `nonstandard_variants.txt` that looks like this:
```
############################################################
# Non-standard spellings in IRyA affiliations 2003-present
#        
# N = 98
############################################################

2021MNRAS.000.0000C
Author 2: Xxxxxxx, A. B.
Affil: Instituto de Radiostronomia y Astrofisica, Universidad Nacional Autonoma de Mexico, Morelia, Michoacan, Mexico, 58089 Mexico

2021ExA....00..000F
Author 5: Yyyyyy, C.
Affil: Instituto de Radioastronomí a y Astrofí sica, UNAM, Campus Morelia, Michoacán, México C.P., 58089, Michoacán, México

... etc ...
```
