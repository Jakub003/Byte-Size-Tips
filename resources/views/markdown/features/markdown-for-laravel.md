# Markdown for Laravel
This is a complete guide on how to implement markdown into your Laravel project for a variety of scenarios. We will first start out with installing markdown, and getting it configured.

Than we will go trough a few scenarios that you might want to use markdown for.

## Laravel Markdown {#laravel-markdown}
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
## Torchlight {#torchlight}
Next, we need to install code highlighting with torchlight. Be sure to provide attribution if you do not have the premium version of torchlight to help support the project team that has developed this package.
- https://torchlight.dev/docs/clients/commonmark-php

### Installing Blade Component {#installing-blade-component}
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

### Markdown Highlighting {#markdown-highlighting}
If you want to use the torchlight style code highlighting in the Laravel Markdown package, than you will need to setup the commonmark extension for it.
- https://torchlight.dev/docs/clients/commonmark-php

First we install it with composer
```php
composer require torchlight/torchlight-commonmark
```
Next we need to enable the extension in the package. Open `markdown.php` and add `Torchlight\Commonmark\V2\TorchlightExtension::class,`
```php
    'extensions' => [
        Torchlight\Commonmark\V2\TorchlightExtension::class,
        ...
    ],
```
You need to publish the config file with
```php
php artisan torchlight:install
```

### Tailwind CSS Config {#tailwind-css-config}
If you are using Tailwind, you have an extra step to make sure everything looks good. You
- https://torchlight.dev/docs/CSS

Open `resources\css\app.css` and the following styling
```css
@import 'tailwindcss/base';
@import 'tailwindcss/components';
@import 'tailwindcss/utilities';

@layer components {
    /*
    Margin and rounding are personal preferences,
    overflow-x-auto is recommended.
    */
    pre {
        @apply my-4 rounded overflow-x-auto;
    }

    /*
    Add some vertical padding and expand the width
    to fill its container. The horizontal padding
    comes at the line level so that background
    colors extend edge to edge.
    */
    pre code.torchlight {
        @apply block py-4 min-w-max;
    }

    /*
    Horizontal line padding.
    */
    pre code.torchlight .line {
        @apply px-4;
    }

    /*
    Push the code away from the line numbers and
    summary caret indicators.
    */
    pre code.torchlight .line-number,
    pre code.torchlight .summary-caret {
        @apply mr-4;
    }
}
```
Run `npm run watch` or `npm run dev` and everything should work.

## Commonmark Extensions {#commonmark-extensions}
You can extend the functionality of markdown with your own package or using some of the CommonMark packages from the documentation.
- https://commonmark.thephpleague.com/2.2/extensions/overview/

For packages that are on that list you just need to go to `markdown.php` and add a new item in the `extensions` section.

### Autolinks {#autolinks}
We will add `Autolinks` as an example. https://commonmark.thephpleague.com/2.2/extensions/autolinks/

In the documentation you will see `usage` and take a look at how it is setup.
```php
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\Autolink\AutolinkExtension;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\MarkdownConverter;
...
```
We are focusing only on extension line
```php
use League\CommonMark\Extension\Autolink\AutolinkExtension;
```
Now we can go to `markdown.php` file and find the extensions section. We duplicate the line for `Table\TableExtension` and replace it with `Autolink\AutolinkExtension`. The code will look like the example below.

```php
'extensions' => [
        League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension::class,
        League\CommonMark\Extension\Table\TableExtension::class,
        Torchlight\Commonmark\V2\TorchlightExtension::class,
        League\CommonMark\Extension\Autolink\AutolinkExtension::class,
    ],
```

### Adding Attributes {#adding-attributes}
Enabling attributes will allow you to add custom classes to elements and add ids, which you can link too with anchor tags. It comes very handy if you want to make documentation style markdown pages.

Just need to add this to the `markdown.php` file
```php
 League\CommonMark\Extension\Attributes\AttributesExtension::class,
```

These are the two new syntax you will be a ble to use.
```php
// adding custom classes
## Header {.header-name}
 <h2 class="header-name">Header</h2>

// adding attributes
## Header{#header-name}
<h2 id="header-name">Header</h2>
```
<!-- ## Blog Setup

Great series on Laracasts that provides more guidance and clarification on how to make the dynamic posts work.
- https://laracasts.com/series/laravel-8-from-scratch/episodes/8 -->
