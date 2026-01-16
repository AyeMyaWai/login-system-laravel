# Laravel Login Demo

## Requirements
- PHP >= 8.2
- Composer
- MySQL

## Setup
1. Copy `.env.example` to `.env` and configure DB:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=authentication
DB_USERNAME=root
DB_PASSWORD=

2. Install dependencies:
composer install

3. Generate app key:
php artisan key:generate


4. Run migrations:
php artisan migrate --seed

5. Serve the app locally:
php artisan serve

6. Open browser at:
http://127.0.0.1:8000
