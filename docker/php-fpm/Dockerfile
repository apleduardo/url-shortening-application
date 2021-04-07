FROM php:7.2-fpm

COPY wait-for-it.sh /usr/bin/wait-for-it

RUN chmod +x /usr/bin/wait-for-it

RUN docker-php-ext-install pdo_mysql

RUN apt-get update && apt-get -y install zip

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

CMD composer install ;   php-fpm 

EXPOSE 9000
