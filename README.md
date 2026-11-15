# Tasks for Today

Laravel implementation of the IT0049 TSA3 Tasks for Today Management System.

## Included pages

- `/` shows only tasks scheduled for the current date.
- `/tasks` shows every seeded task ordered by date.
- `/profile` reads the single seeded user record through Eloquent.
- `/about` identifies the developer and explains the implementation.

## Stack

- Laravel 12
- PHP 8.2+
- SQLite for local development
- Blade views and Eloquent models

## Run locally

```bash
php artisan migrate:fresh --seed
php artisan serve
```

Then open `http://127.0.0.1:8000`.

The seed creates exactly one user and eight tasks across four dates, including the current date. The interface uses a warm paper background, deep teal navigation, coral accents, and serif display headings to give the project a distinct visual identity without adding a front-end dependency.
