#!/usr/bin/env bash

if [ "$( docker images | grep php-fork | wc -l )" -eq "0" ]; then
    docker build -t php-fork .
fi
docker run -v $(pwd)/app:/root/php-fork --rm php-fork
