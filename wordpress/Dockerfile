
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

ARG UID=33
ARG GID=33

# Создаем группу и пользователя с заданными UID и GID
RUN groupmod -g ${GID} www-data && \
  usermod -u ${UID} -g ${GID} www-data

# Копируем файлы WordPress в контейнер
COPY . /var/www/html
WORKDIR /var/www/html

# Настраиваем права доступа к wp-content и плагину
# RUN mkdir -p /var/www/html/wp-content/plugins/all-in-one-wp-migration/storage && \
#   chown -R www-data:www-data /var/www/html/wp-content && \
#   chmod -R 755 /var/www/html/wp-content

# Повторно проверяем права на папку плагина
# RUN ls -ld /var/www/html/wp-content/plugins/all-in-one-wp-migration/storage && \
#   ls -l /var/www/html/wp-content/plugins/all-in-one-wp-migration

# Устанавливаем права на папку

USER www-data

# RUN chmod a+rwx -R /var/www/html

# Устанавливаем рабочую директорию

# Запускаем PHP-FPM
CMD ["php-fpm"]
