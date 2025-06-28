#!/bin/bash
case "$1" in
  start) docker-compose up -d ;;
  stop) docker-compose down ;;
  restart) docker-compose down && docker-compose up -d ;;
  *) echo "Usage: ./dev.sh {start|stop|restart}" ;;
esac