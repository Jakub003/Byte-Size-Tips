<x-template.article title="Quick Commands">
    <x-slot name="content">
        <div id="laravel-installer">
            <h3>Laravel Installer</h3>
            <p>This will let you quick start new laravel projects.</p>
            <pre><x-torchlight-code language='php'>
// first you must install it
composer global require laravel/installer

// than you can create new projects with
laravel new example-app

// adding --jet will install with Laravel JetStream
// This includes Alpine, Tailwind, and Livewire configured
laravel new example-app --jet
            </x-torchlight-code></pre>
        </div>

        <div id="creating-models">
            <h3>Creating Models</h3>
            <pre><x-torchlight-code language='php'>
// create a new model
// use Singluar version
php artisan make:model Book // not Books
php artisan make:model BookNote // not BookNotes

// create model with migration and factory seeder
php artisan make:model Book -mf
            </x-torchlight-code></pre>
        </div>

        <div id="database-migrations">
            <h3>Database Migrations</h3>
            <pre><x-torchlight-code language='php'>
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
            </x-torchlight-code></pre>
        </div>
    </x-slot>

    <x-slot name="navigation">
        <x-button.page-item name="Laravel Installer" url="laravel-installer" />
        <x-button.page-item name="Creating Models" url="creating-models" />
        <x-button.page-item name="Database Migrations" url="database-migrations" />
    </x-slot>
</x-template.article>
