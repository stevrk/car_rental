#!/usr/bin/env bash
echo "Starting deployment script..."

# Install Composer dependencies
echo "Installing Composer dependencies..."
composer install --no-interaction --no-dev --optimize-autoloader

# Clear and cache configurations
echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Caching views..."
php artisan view:cache

# Set permissions
echo "Setting storage permissions..."
chmod -R 775 /var/www/html/storage
chmod -R 775 /var/www/html/bootstrap/cache

echo "Application is ready!"