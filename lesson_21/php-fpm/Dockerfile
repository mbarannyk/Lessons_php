FROM php:8.1-fpm

RUN docker-php-ext-install mysqli
RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN apt-get update && apt-get install -y \
        curl \
        wget \
        git \
        libpng-dev \
		    libzip-dev \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install bcmath \
    && docker-php-ext-install gd \
    && docker-php-ext-install zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
 
# Установка Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ENV COMPOSER_ALLOW_SUPERUSER 1

# Рабочая директория PHP
WORKDIR /var/www

# Запуск контейнера
# CMD ["php-fpm"]