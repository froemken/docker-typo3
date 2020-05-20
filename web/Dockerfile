FROM php:7.3-apache
LABEL maintainer="Stefan Froemken <froemken@gmail.com>"
EXPOSE 80

# Install production php.ini and override with custom settings
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
COPY php/typo3.ini $PHP_INI_DIR/conf.d/

# Set Apache User and Group
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data

# Set DocumentRoot to public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/typo3/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Update apt packages and install git and zip
RUN apt-get update
RUN apt-get install -y wget curl
RUN apt-get install -y zip unzip libzip-dev
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev
RUN apt-get install -y git graphicsmagick
RUN apt-get install -y libicu-dev

# INstall PHP Extensions
RUN docker-php-ext-configure gd --with-jpeg-dir=/usr/include/ --with-freetype-dir=/usr/include/
RUN docker-php-ext-install -j$(nproc) gd zip opcache intl mysqli

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install TYPO3
RUN mkdir /var/www/html/typo3
RUN cd /var/www/html
RUN composer create-project typo3/cms-base-distribution typo3 ^10.4
RUN chown -R www-data:www-data /var/www/html/typo3

COPY ./src/ /var/www/html/typo3/public

WORKDIR /var/www/html
