# Markdown WordPress Docs
[![GitHub release](https://img.shields.io/github/release/gnowland/markdown-wordpress-docs.svg?style=flat-square)](https://github.com/gnowland/markdown-wordpress-docs/releases)
|
[![Packagist](https://img.shields.io/packagist/v/gnowland/markdown-wordpress-docs.svg?style=flat-square)](https://packagist.org/packages/gnowland/markdown-wordpress-docs)
|
[![buymeacoffee.com/gnowland](https://img.shields.io/badge/Buy%20Me%20A%20Coffee-donate-yellow.svg?style=flat-square)](https://www.buymeacoffee.com/gnowland)


A lightweight WordPress Plugin that generates admin documentation/help pages for your WordPress site from Markdown files.

## Use

1. Add Markdown files to `docs/`
2. [Install](#install) & Activate plugin in WordPress Admin

### Details

- `/docs` should contain all your Markdown files
- Links to `../[DOCUMENT_NAME.md]`, `./[DOCUMENT_NAME.md]` or `docs/[DOCUMENT_NAME.md]` will automatically route to display the file using URL Parameters `?page=docs&doc=[DOCUMENT_NAME].md`
  - I recommend dividing files into subjects and including a Table of Contents in `docs/README.md`.
- The help page will be displayed in the Dashboard sub-menu

## Installation ##

### Composer ###

```shell
composer require gnowland/markdown-wordpress-documentation
```

Activate with [wp-cli](http://wp-cli.org/)

```shell
wp plugin activate markdown-wordpress-documentation
```
or in the WordPress Admin panel.

### Git ###

* `git clone` into your sites plugin folder
* Activate via WordPress or wp-cli (see above) or in WordPress Admin

### Manually ###

* Download the [latest release](https://github.com/gnowland/markdown-wordpress-docs/releases) as a `.zip` file
* Unzip to your sites plugin folder
* Activate via WordPress Admin or wp-cli (see above)
