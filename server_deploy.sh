#!/bin/sh
set -e

echo "Deploying application ..."

# Enter maintenance mode
(php artisan down --message 'The app is being (quickly!) updated. Please try again in a minute.') || true
# Update codebase
git fetch origin deploy
git reset --hard origin/deploy

# Install dependencies based on lock file
composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev

# Migrate database
php artisan migrate --force

# Clear cache
php artisan optimize

# Reload PHP to update opcache
echo "" | sudo systemctl reload php7.4-fpm

# Exit maintenance mode
php artisan up
