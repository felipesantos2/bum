FROM php:8.4.2-fpm

LABEL maintainer="Felipe Pinheiro <github.com/felipesantos2>"

RUN apk update
RUN apk add --no-cache libpng-dev
RUN apk add --no-cache libjpeg-turbo-dev
RUN apk add --no-cache freetype-dev
RUN apk add --no-cache libzip-dev
RUN apk add --no-cache git
RUN apk add --no-cache unzip
RUN apk add --no-cache icu-dev
RUN apk add --no-cache libxml2-dev
RUN apk add --no-cache openssl-dev
RUN apk add --no-cache bash
RUN apk add --no-cache --virtual .build-deps gcc g++ make

RUN docker-php-ext-install gd pdo pdo_mysql

RUN curl -sS https:://getcomposer.org/installer | php -- install-dir=/usr/local/bin --filename=composer
