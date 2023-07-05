FROM php:8.1.12-apache
RUN docker-php-ext-install -j$(nproc) mysqli
COPY projet/ /var/www/html/