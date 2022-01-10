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
    "Radioastronomí a y Astrofí sica",  # For Gustavo Bruzual 2021 paper
]
```

We now use an accent-insensitive method that catches most errors in specifying the institute name.  But any new variants that are spotted can be added here.
