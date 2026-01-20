# Laravel ログインデモ
## 必要環境
- PHP >= 8.2
- Composer
- MySQL

## セットアップ手順
1. Copy `.env.example` to `.env` and Create Database and configure DB:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=authentication
DB_USERNAME=root
DB_PASSWORD=

2. 依存パッケージをインストール:
composer install

3. アプリケーションキーを生成:
php artisan key:generate


4. マイグレーションとシーダーを実行:
php artisan migrate --seed

5. アプリをローカルで起動:
php artisan serve

6. ブラウザでアクセス:
http://127.0.0.1:8000

7. シーダーで作成したユーザーでログイン可能:
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
        ]);
