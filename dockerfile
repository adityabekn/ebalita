FROM php:7.4-apache
RUN docker-php-ext-install mysqli
RUN a2enmod rewrite
RUN service apache2 restart
WORKDIR /var/www/html
EXPOSE 80