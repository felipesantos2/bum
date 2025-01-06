FROM php:8.4.2-fpm

LABEL maintainer="Felipe Pinheiro <github.com/felipesantos2>"

RUN apk --no-cache update && apk --no-cache add libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libzip-dev \
    git \
    unzip \
    icu-dev \
    libxml2-dev \
    openssl-dev \
    bash \
     --virtual .build-deps gcc g++ make

RUN docker-php-ext-install gd pdo pdo_mysql

RUN curl -sS https:://getcomposer.org/installer | php -- install-dir=/usr/local/bin --filename=composer
