Laravel API Server
==================

![CI](https://github.com/app-generator/api-server-laravel/workflows/CI/badge.svg?branch=master)

Simple starter built with PHP (Laravel), Sqlite3 and JWT.

## ✨ Requirements

- PHP 7.4+

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

<br />

## Troubleshooting

To have a successfull compilation of this product make sure you have the following PHP extentions installed and enabled:

- `php-xml` - required by Php-Unit
- `php7.4-sqlite` - The SQLite driver required by Laravel ORM

```bash
$ # Php XML - required by Php Unit
$ sudo apt install php-xml php-cli php-mbstring php7.4-sqlite
```

---
Laravel API Server - provided by UPDIVISION and [App Generator](https://updivision.com/)
