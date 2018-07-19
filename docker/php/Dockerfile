FROM php:7.1-fpm
RUN apt-get update
RUN apt-get install -y g++
RUN apt-get install -y libfreetype6-dev
RUN apt-get install -y libjpeg62-turbo-dev
RUN apt-get install -y libmcrypt-dev
RUN apt-get install -y libpng-dev
RUN apt-get install -y libpq-dev
RUN apt-get install -y zip unzip
RUN apt-get install -y nano
RUN docker-php-ext-install -j$(nproc) iconv
RUN docker-php-ext-install -j$(nproc) mcrypt
RUN docker-php-ext-install -j$(nproc) gd
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install json
EXPOSE 9000

WORKDIR /var/www/kantibhuva.com
