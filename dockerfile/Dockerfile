FROM php:7.4-fpm
 
RUN apt-get update && docker-php-ext-install mysqli pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer