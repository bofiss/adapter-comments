FROM php:73-fpm

RUN apt-get update && apt-et install -y \
    zliblg-dev \
    g++ git liblcu-dev zip \
    libzip-dev \
    zip \
    && docker-php-ext-install intl opcache pdo_mysql \
    && pecl install apcu xdebug-2.7.0RC2 \
    && docker-php-ext-enable apcu xdebug  \
    && docker-php-ext-configure zip --with-libzip \
    && docker-php-ext-install zip
WORKDIR /app

RUN curl -s https://getcomposer.org/installer | php -- --install-dir=usr/bin/local --filename=composer
COPY . /app