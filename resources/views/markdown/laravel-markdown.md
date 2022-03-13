# Laravel Markdown
This is a complete guide on how to implement markdown into your Laravel project for a variety of scenarios. We will first start out with installing markdown, and getting it configured.

Than we will go trough a few scenarios that you might want to use markdown for.

## Initial Setup
We are going to be using the Laravel Markdown package by Graham Cambell
- https://github.com/GrahamCampbell/Laravel-Markdown

First, we will install the package with composer.
```php
composer require graham-campbell/markdown:14.0.x-dev
```
Once installed, if you are not using automatic package discovery, then you need to register the `GrahamCampbell\Markdown\MarkdownServiceProvider` service provider in your `config/app.php`.

Now will need to publish the vendor files
```php
php artisan vendor:publish
```
You may be asked to select which files to publish, be sure to publish `GrahamCampbell\Markdown\MarkdownServiceProvider`
## Code Highlighting
Next, we need to install code highlighting with torchlight. Be sure to provide attribution if you do not have the premium version of torchlight to help support the project team that has developed this package.
- https://torchlight.dev/docs/clients/commonmark-php

### Installing Blade Component
This will let you use the torchlight blade component in any file directly without having to do markdown syntax.
- https://torchlight.dev/docs/clients/laravel
```php
// example of how you can use torchlight as a blade component
<pre><x-torchlight-code language='php'>
    echo "Hello World!";
</x-torchlight-code></pre>
```

First you need to create a new torchlight account
```php
https://app.torchlight.dev/register?plan=free_month
```
Once you are logged in, you will need to navigate to `Tokens` and generate a new API Token. You can call it whatever you want.

Be sure to copy the token that is generated, as you will not see it again! Note that this is an example token, and it won't actually work.
```php
torch_sXs1dbmkh3ne7XzAKGoqdXeAkNmLqmUsFXPV8esY
```
Now that you have your token, go to your `.ENV` file and create a new record.
```php
TORCHLIGHT_TOKEN = torch_sXs1dbmkh3ne7XzAKGoqdXeAkNmLqmUsFXPV8esY
```
Next go to `Http/Kernel.php` and include it in the middleware
```php
protected $middleware = [
    \Torchlight\Middleware\RenderTorchlight::class,
    ...
];
```
Now we publish the configuration file with the following command.
```php
php artisan torchlight:install
```
You are done! Check out the full docs for more configuration options https://torchlight.dev/docs/clients/laravel but you can now use the blade component in your laravel project wherever it may be needed.

### Markdown Code Highlighting
```php
composer require torchlight/torchlight-commonmark
```

## Resources
### Laracasts Series
Great series on Laracasts that provides more guidance and clarification on how to make the dynamic posts work.
- https://laracasts.com/series/laravel-8-from-scratch/episodes/8

### Laravel Markdown Packages
- https://github.com/GrahamCampbell/Laravel-Markdown

### Code Highlighting by Torchlight
- https://torchlight.dev/
