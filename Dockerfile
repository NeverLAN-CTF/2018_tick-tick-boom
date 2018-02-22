FROM php:5.6-apache

MAINTAINER Tanner Purves <tanner@neverlanctf.com>

RUN apt-get update --fix-missing
RUN a2enmod rewrite

COPY web/ /var/www/html
