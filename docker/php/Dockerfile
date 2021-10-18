FROM php:7.4-fpm

RUN apt-get update && apt-get install -y
RUN apt-get update && apt-get install -y --no-install-recommends \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
    && docker-php-ext-install \
        zip \
        soap

# Install APCu and APC backward compatibility
#RUN pecl install apcu \
#    && pecl install apcu_bc-1.0.3 \
#    && docker-php-ext-enable apcu --ini-name 10-docker-php-ext-apcu.ini \
#    && docker-php-ext-enable apc --ini-name 20-docker-php-ext-apc.ini

## Adding yarn
#RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add -
#RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list
#RUN apt-get update && apt-get install -y yarn

RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

COPY ./ /var/www/docker
WORKDIR /var/www/docker
