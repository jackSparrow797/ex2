#!/bin/bash
find './logs' -type f -delete
find './tmp' -type f -delete
chmod -R 777 ./logs
chmod -R 777 ./tmp
cd ./docker && docker-compose up --build