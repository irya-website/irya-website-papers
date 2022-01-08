# Publication list for IRyA website

Python script that uses ADS to construct web page with lists of refereed publications by researchers from the Instituto de Radioastronomía y Astrofísica, Universidad Nacional Autónoma de México.

## Install dependencies

```sh
pip install ads
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
    "Radioastronomía y Astrofisíca",  # For Luis Zapata 2020 paper
    "Radioastronomí a y Astrofí sica",  # For Gustavo Bruzual 2021 paper
    "Radioastronomia y Astrofisica",
]
```

When a paper gets missed out, it is usually because of an error in the accents of the institute name.  Any new variants that are spotted can be added here.
