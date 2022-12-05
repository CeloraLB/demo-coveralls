FROM php:8.1-fpm

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# RUN apk add --no-cache --update --virtual buildDeps autoconf \
#     && pecl install xdebug \
#     && docker-php-ext-enable xdebug 

RUN pecl install xdebug

# RUN pecl install xdebug && docker-php-ext-enable xdebug