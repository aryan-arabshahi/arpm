FROM php:8-fpm

RUN mkdir -p /app
RUN chown -R www-data:www-data /app
WORKDIR /app

COPY . .

CMD php -S 0.0.0.0:8000 public/index.php
