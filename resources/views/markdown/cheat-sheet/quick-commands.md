# Quick Commands

## Laravel Installer
This will let you quick start new laravel projects.
```php
// first you must install it
composer global require laravel/installer

// than you can create new projects with
laravel new example-app

// adding --jet will install with Laravel JetStream
// This includes Alpine, Tailwind, and Livewire configured
laravel new example-app --jet
```

## Creating Models
```php
// create a new model
// use Singluar version
php artisan make:model Book // not Books
php artisan make:model BookNote // not BookNotes

// create model with migration and factory seeder
php artisan make:model Book -mf
```

## Database Migration
```php
// create new migration file
// Covention: use _tables and plural versions
php make:migration create_books_table // Correct
php make:migration create_book_table // Incorrect

// create fresh migration
php artisan migrate:fresh

// create fresh migration and run seeder files
php artisan migrate:fresh --seed

// run migration and force run of all the files
php artisan migrate --force
```
