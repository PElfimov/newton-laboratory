#!/bin/bash

mkdir /var/run/fcgiwrap/
chown nginx:nginx /var/run/fcgiwrap/

runuser -u nginx -- fcgiwrap -s unix:/var/run/fcgiwrap/fcgiwrap.socket > /var/log/fcgiwrap.log &
