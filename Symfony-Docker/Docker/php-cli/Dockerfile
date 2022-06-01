FROM php:8.1-cli

RUN apt-get update && apt-get install -y \
    wget \
    libpq-dev \
    zlib1g-dev \
    libmcrypt-dev \
    zip unzip \
      git \
    libzip-dev

RUN docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/bin --filename=composer --quiet

#ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /symfony