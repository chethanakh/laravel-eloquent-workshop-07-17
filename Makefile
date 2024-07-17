#!/usr/bin/make

SHELL = /bin/sh

UID := $(shell id -u)
GID := $(shell id -g)

export UID
export GID

shell:
	docker exec -it  laravel-eloquent-workshop-07-17-app-container bash -c "sudo -u app-user /bin/bash"

up:
	UID=${UID} GID=${GID} docker-compose -f docker-compose.yml --profile main up --build -d --remove-orphans

down:
	docker-compose -f docker-compose.yml --profile main down --remove-orphans