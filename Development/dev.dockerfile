
FROM php:8.1-apache

COPY Config/Certs/checkmenu.local.pem /etc/apache2/ssl/checkmenu.local.pem

COPY Config/Certs/checkmenu.local-key.pem /etc/apache2/ssl/checkmenu.local-key.pem

COPY Config/Apache/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod ssl && a2enmod headers && a2enmod rewrite

RUN apt-get update && apt-get install -y \
    zip

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions \ 
    intl \
    mysqli \
    xdebug

COPY --from=composer /usr/bin/composer /usr/bin/composer

COPY Development/xdebug/xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

WORKDIR /var/www/html