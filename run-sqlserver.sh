#!/bin/bash

case $1 in
    start)
        cd sqlserver
        docker-compose up -d
        ;;
    stop)
        cd sqlserver
        docker-compose stop
        ;;
    *)
        echo "You must specify either 'start' or 'stop'."
        ;;
esac
