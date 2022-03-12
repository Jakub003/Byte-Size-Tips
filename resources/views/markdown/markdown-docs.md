# Markdown Docs
This guide will teach you how to create a markdown style blog / documentation like we have on this website.
- Larevel 9.x

## Installing Package
We are going to be using the `GrahamCampbell/Laravel-Markdown` package. You can find the full documentation for this here https://github.com/GrahamCampbell/Laravel-Markdown .

1. First, we will install the package with composer.
```
composer require graham-campbell/markdown:14.0.x-dev
```
2. Once installed, if you are not using automatic package discovery, then you need to register the `GrahamCampbell\Markdown\MarkdownServiceProvider` service provider in your `config/app.php`.

3. We will need to publish the vendor files
```
php artisan vendor:publish
```
You may be asked to select which files to publish, be sure to publish `GrahamCampbell\Markdown\MarkdownServiceProvider`
## Markdown Folder
You can call this whatever you want, such as Posts, Markdown, Articles ect.

## Creating Model
Now will be creating a model. This will allow us to render the markdown files dynamically.
1. We will create a model called `Article`
```
php artisan make:model Article
```
Remove everything, until it looks like this
```
...
namespace App\Models;
use Illuminate\Support\Facades\File;

class Article
{
   // empty
}
...
```

## Resources
#### Laracasts Series
https://laracasts.com/series/laravel-8-from-scratch/episodes/8

#### Laravel Markdown Packages
https://github.com/GrahamCampbell/Laravel-Markdown

#### Code Highlighting by Torchlight
https://torchlight.dev/
