
FROM php:8.1-apache

COPY certs/checkmenu.local.pem /etc/apache2/ssl/checkmenu.local.pem

COPY certs/checkmenu.local-key.pem /etc/apache2/ssl/checkmenu.local-key.pem

COPY apache-conf/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod ssl && a2enmod headers && a2enmod rewrite

RUN apt-get update && apt-get install -y \
    zip

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions intl mysqli

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html