#!/usr/bin/env bash
php artisan deploy:render
php artisan serve --host=0.0.0.0 --port=$PORT
