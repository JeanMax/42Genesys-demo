# genesys

un site (2 pages) avec une vingtaine d'articles

## en commun:
* Un menu, pour naviguer entre les 2 pages
* Une page dynamique pour l'article avec lecture des informations dans la DB, avec un texte, un auteur et plusieurs images (par exemple)
* Une page dans laquelle on modifie la base de données

## techno:
* back: symfony 3
* front: bootstrap
* DB: mysql

## usage:

* Requirements: php, mysql, symfony, composer
* First you may want to tweak your mysql database user/password config. See app/config/parameters.yml. Default is genesys/genesys
* Then update database and load fixtures with:
```
./install.sh
```
* Launch your server with:
```
php bin/console server:start
```
* Now you can access your site at: localhost:8000
