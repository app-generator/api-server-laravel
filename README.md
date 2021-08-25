Laravel API Server
==================

![CI](https://github.com/app-generator/api-server-laravel/workflows/CI/badge.svg?branch=master)

Simple starter built with PHP (Laravel), Sqlite3 and JWT.

## ✨ Requirements

- PHP 7.3+

## 🚀 Installation

```bash
composer install && \
cp .env.example .env && \
php artisan key:generate
```

Authentication is based on JWT, so generating a secret in your `.env` is needed:

```bash
php artisan jwt:secret
```

## 🖥 Databases

The default database driver is `SQLite`, so you need to create the database file:

```bash
touch database/database.sqlite
```

Run migrations using `artisan migrate`:

```bash
php artisan migrate
```

You're now ready! 👩‍🚀
