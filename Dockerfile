FROM php:8.2-cli

RUN apt-get update && apt-get install -y git unzip libzip-dev libonig-dev libsqlite3-dev libpq-dev nodejs npm \
    && docker-php-ext-install pdo pdo_sqlite pdo_pgsql mbstring zip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html
COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction \
    && npm install \
    && npm run build

CMD sh -c 'touch database/database.sqlite && php artisan migrate --force && php artisan config:cache && php artisan serve --host=0.0.0.0 --port=${PORT:-10000}'
