FROM php:7.4-apache
RUN docker-php-ext-install pdo_mysql
COPY site/ /var/www/html/
EXPOSE 80