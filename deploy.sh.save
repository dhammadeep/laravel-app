#!/bin/bash

echo "Pulling latest code..."
git pull origin master

echo "Stopping containers..."
docker compose down

echo "Building containers..."
docker compose build --no-cache

echo "Starting containers..."
docker compose up -d

echo "Installing dependencies..."
docker compose exec -T app composer install --no-interaction --prefer-dist --optimize-autoloader

echo "Running migrations..."
docker compose exec -T app php artisan migrate --force

echo "Clearing cache..."
docker compose exec -T app php artisan optimize:clear

echo "Deployment completed."
