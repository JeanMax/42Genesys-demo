#!/bin/bash
set -ex

ME="$0"

_usage() {
    cat << EOF >&2
Usage: $ME OPTION
    --clear-cache, -c: clear project cache (dev/prod... brute)
    --update, -u: update project, implies -c (install dependencies, update database)
EOF
}

_install() {
    composer install
    php bin/console doctrine:database:create --if-not-exists
    php bin/console doctrine:schema:update --force
    php bin/console doctrine:fixtures:load # --append
}

_clear-cache() {
    rm -rf var/{cache,logs}
    mkdir -p var/{cache,logs}
    touch var/{cache,logs}/.gitkeep
    php bin/console cache:clear
    chown -R "$USER:users" var/{cache,logs}
    chmod 755 var/{cache,logs}
}

_update() {
    # git checkout master
    # git pull
    composer install
    php bin/console doctrine:schema:update --force
}


if ! [ "$1" ]; then
    _install
elif [ "$1" == "-u" ] || [ "$1" == "--update" ]; then
    _update
    _clear-cache
elif [ "$1" == "-c" ] || [ "$1" == "--clear-cache" ]; then
    _clear-cache
else
    _usage
fi
