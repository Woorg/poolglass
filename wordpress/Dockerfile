FROM php:8.3-fpm

# Устанавливаем необходимые расширения PHP
RUN apt-get update && apt-get install -y \
  libzip-dev \
  libpng-dev \
  libjpeg-dev \
  libfreetype6-dev \
  unzip \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install zip mysqli gd

# Устанавливаем Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Устанавливаем WP-CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
  && chmod +x wp-cli.phar \
  && mv wp-cli.phar /usr/local/bin/wp

# Сбрасываем кэш
RUN echo "Reset Cache"

# Копируем файлы и устанавливаем права
COPY --chown=www-data:www-data . /var/www/html
RUN chown -R www-data:www-data /var/www/html && chmod -R 775 /var/www/html

# Устанавливаем php.ini
COPY php.ini /usr/local/etc/php/conf.d/php.ini

# Устанавливаем рабочую директорию
WORKDIR /var/www/html

# Запускаем от имени пользователя www-data
USER www-data

# Запускаем сервис PHP-FPM
CMD ["php-fpm"]
