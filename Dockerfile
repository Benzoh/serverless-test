FROM composer:latest AS composer

FROM php:8.0-apache

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update \
    && apt-get install -y zip unzip

RUN composer create-project laravel/laravel src
WORKDIR src

RUN composer require bref/bref
RUN composer require bref/bref bref/laravel-bridge --update-with-dependencies
