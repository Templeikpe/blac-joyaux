FROM php:8.4-cli

RUN apt-get update && apt-get install -y \
    git unzip zip libsqlite3-dev libzip-dev \
    && docker-php-ext-install pdo pdo_sqlite zip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN composer install --no-interaction --optimize-autoloader --no-dev

CMD sh -c "\
    test -f .env || cp .env.example .env; \
    test -f database/database.sqlite || touch database/database.sqlite; \
    php artisan key:generate --force; \
    php artisan migrate --force; \
    php artisan serve --host=0.0.0.0 --port=${PORT:-8000}"
