#!/usr/bin/env bash
set -e

# Create storage symlink
php artisan storage:link --force

# Run migrations
php artisan migrate --force

# Cache for performance
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize

# Start PHP built-in server
php artisan serve --host=0.0.0.0 --port=${PORT:-8000}
