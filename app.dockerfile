FROM php:7.3-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev \
    mariadb-client libmagickwand-dev --no-install-recommends \
    && pecl install mcrypt-1.0.4 \
    && docker-php-ext-enable mcrypt
ADD . /var/www
RUN chmod 777 /var/www/storage/logs/laravel.log \
    && chmod 777 /var/www/storage/framework/views \
    && chmod 777 /var/www/storage/framework/testing \
    && chmod 777 /var/www/storage/framework/sessions