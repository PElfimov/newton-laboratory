FROM php:7.4-fpm

RUN apt update && \
    apt install -y vim iputils-ping procps git zip unzip

RUN curl -sS https://getcomposer.org/installer | php -- \
--install-dir=/usr/bin --filename=composer && chmod +x /usr/bin/composer

RUN apt install -y libpq-dev
RUN docker-php-ext-install pdo pdo_pgsql


