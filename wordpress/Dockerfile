
# Используем образ PHP с поддержкой FPM
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

# Устанавливаем WP-CLI для управления WordPress через командную строку
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
  && chmod +x wp-cli.phar \
  && mv wp-cli.phar /usr/local/bin/wp

# Копируем php.ini в контейнер
COPY php.ini /usr/local/etc/php/conf.d/php.ini


# Копируем файлы WordPress в контейнер
COPY . /var/www/html
WORKDIR /var/www/html


# Устанавливаем права на папку
RUN chown -R www-data:www-data /var/www/html 
RUN chmod -R 755 /var/www/html

USER www-data

# RUN chmod a+rwx -R /var/www/html

# Устанавливаем рабочую директорию

# Запускаем PHP-FPM
CMD ["php-fpm"]
