# POS Central — IT0049 TFA5

A four-page Point of Sale (POS) foundations application built with Laravel 12, configured for PHP 8.2. It demonstrates routes, controllers, Blade views, navigation, and static PHP arrays as temporary data sources.

## Pages

| Page | URL | Controller / action |
|---|---|---|
| Overview | `/` | `PageController@home` |
| About | `/about` | `PageController@about` |
| Customer Accounts | `/customers` | `CustomerController@index` |
| User Accounts | `/users` | `UserController@index` |

## Requirements

- PHP 8.2.0 or newer (tested target: XAMPP PHP 8.2.x)
- Composer 2
- PHP extensions required by Laravel 12, including Fileinfo and PDO SQLite for the included database setup, including PDO SQLite for the included database setup

## Setup and run locally

1. Extract this project folder and open a terminal in it.
2. Install dependencies: `composer install`
3. Copy `.env.example` to `.env` (Windows PowerShell: `Copy-Item .env.example .env`; macOS/Linux: `cp .env.example .env`).
4. Confirm `database/database.sqlite` exists; if not, create an empty file with that name inside the `database` folder.
5. Generate the application key: `php artisan key:generate`
6. Run the migration and sample database seeder: `php artisan migrate --seed`
7. Start the development server: `php artisan serve`
8. Visit `http://127.0.0.1:8000` and test all four links.

## TFA5 implementation notes

- All four routes are defined in `routes/web.php`.
- `PageController` handles the landing and about pages.
- `CustomerController` and `UserController` each define five sample records in static PHP arrays and pass them to their Blade views.
- The customer and user Blade views loop through the arrays using `@forelse` (the loop is the `@foreach` family and also provides an empty-state branch).
- `resources/views/layouts/app.blade.php` contains shared navigation links to all four pages.
- A database migration and `DatabaseSeeder` are included as additional submission artifacts. The listing pages intentionally use static controller arrays, as required by the activity.

## Before submission

Run the project locally and test all four routes. Create a GitHub repository under your account and push the project (exclude `.env` and `vendor`). Deploy it to a Laravel-capable host and include the resulting live URL in your submission. The GitHub repository and hosted URL cannot be created from this workspace because they require access to your accounts and hosting provider.

## Academic note

All names, emails, and phone numbers are fictional sample records.
