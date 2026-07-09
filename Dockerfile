FROM php:8.4-apache

RUN apt-get update && apt-get install -y \
    git unzip zip libsqlite3-dev libzip-dev \
    && docker-php-ext-install pdo pdo_sqlite zip \
    && a2dismod mpm_event 2>/dev/null; a2dismod mpm_worker 2>/dev/null; true \
    && a2enmod mpm_prefork \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN composer install --no-interaction --optimize-autoloader --no-dev

RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf
RUN sed -i 's/80/8080/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 8080

CMD sh -c "test -f .env || cp .env.example .env; test -f database/database.sqlite || touch database/database.sqlite; chown www-data:www-data database/database.sqlite; php artisan key:generate --force; php artisan migrate --force; apache2-foreground"
