FROM php:7.4-fpm

MAINTAINER Tim Helfensdörfer <thelfensdrfer@gmail.com>

ARG ORSEE_DOWNLOAD="https://github.com/orsee/orsee/archive/orsee_3.1.0.zip"

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        unzip \
        curl \
        msmtp \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN curl $ORSEE_DOWNLOAD -L -o /orsee.zip \
    && unzip /orsee.zip -d /orsee \
    && mv /orsee/*/* /orsee/ \
    && rm /orsee.zip

ADD msmtprc /etc/msmtprc

RUN chown root:msmtp /etc/msmtprc && \
    chmod 640 /etc/msmtprc

EXPOSE 9000

CMD ["php-fpm"]
