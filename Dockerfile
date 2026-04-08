FROM php:8.3-apache

RUN docker-php-ext-install pdo_mysql mysqli

# Enable Apache modules
RUN a2enmod rewrite

WORKDIR /var/www/html

COPY /www /var/www/html

RUN chown -R www-data:www-data /var/www/html