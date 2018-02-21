#!/bin/bash
set -ex

ME="$0"
PROJECT_ROOT="."

function _usage () {
    cat << EOF >&2
Usage: $ME OPTION
    --clear-cache, -c: clear project cache (dev/prod... brute)
    --update, -u: update project, implies -c (install dependencies, update database)
EOF
}

function _clear-cache() {
    rm -rf $PROJECT_ROOT/var/{cache,logs}
    mkdir -p $PROJECT_ROOT/var/{cache,logs}
    touch $PROJECT_ROOT/var/{cache,logs}/.gitkeep
    php $PROJECT_ROOT/bin/console cache:clear
    chown -R "$USER:users" $PROJECT_ROOT/var/{cache,logs}
    chmod 755 $PROJECT_ROOT/var/{cache,logs}
}

function _update() {
    # git checkout master
    # git pull
    composer install
    php $PROJECT_ROOT/bin/console doctrine:schema:update --force
    _clear-cache
}


if [ "$1" == "-u" ] || [ "$1" == "--update" ]; then
    _update
elif [ "$1" == "-c" ] || [ "$1" == "--clear-cache" ]; then
    _clear-cache
else
    _usage
fi
