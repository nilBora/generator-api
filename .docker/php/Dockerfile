FROM brdnlsrg/baseimage:php8.1-full-dev-mysql
RUN apk add imagemagick
ENV APK_ADD="bash curl build-base autoconf automake git unzip libmcrypt-dev icu-dev rabbitmq-c-dev libzip-dev curl-dev oniguruma-dev freetype libpng libjpeg-turbo freetype-dev libpng-dev libjpeg-turbo-dev libxml2-dev libmaxminddb-dev imagemagick imagemagick-dev libtool gnu-libiconv"
RUN apk update \
    && apk upgrade \
    && apk add --no-cache ${APK_ADD}\
    && docker-php-ext-configure gd --with-jpeg=/usr/include/ \
    && docker-php-ext-install gd
