FROM php:7.4-apache

RUN apt update

RUN a2enmod headers \
&& a2enmod rewrite \
&& service apache2 restart

COPY . /var/www/html