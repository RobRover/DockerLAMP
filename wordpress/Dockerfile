FROM php:7.3.3-apache
RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install mysqli
#COPY ./vhost.conf /etc/apache2/sites-enabled/000-default.conf
#RUN a2enmod rewrite


EXPOSE 80

