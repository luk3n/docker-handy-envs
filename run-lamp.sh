#!/bin/bash

case $1 in
    start)
        cd lamp
        docker-compose up -d
        ;;
    stop)
        cd lamp
        docker-compose stop
        ;;
    *)
        echo "You must specify either 'start' or 'stop'."
        ;;
esac
