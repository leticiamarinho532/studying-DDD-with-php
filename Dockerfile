FROM php:8.3-fpm
COPY . /var/www/html
WORKDIR /var/www/html
RUN chmod -R 777 /var/www/html

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN composer install
