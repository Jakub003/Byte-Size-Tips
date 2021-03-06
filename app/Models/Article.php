<?php

namespace App\Models;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Article
{
    public static function all()
    {
        return File::files(resource_path('/views/articles/cheat-sheet/'));
    }

    public static function cheatsheetArticle($slug)
    {
        $path = resource_path("/views/articles/cheat-sheet/{$slug}.blade.php");

        if(! file_exists($path)) {
           throw new ModelNotFoundException();
        }

        return cache()->remember("article.{$slug}", 5, function() use($path) {
             return file_get_contents($path);
        });
        // return cache()->remember("article.{$slug}",5,fn() => file_get_contents($path));
    }

    public static function find($category,$slug)
    {
        $path = resource_path("/views/markdown/{$category}/{$slug}.md");

        if(! file_exists($path)) {
           throw new ModelNotFoundException();
        }

        return cache()->remember("article.{$slug}", 0, function() use($path) {
             return file_get_contents($path);
        });
        // return cache()->remember("article.{$slug}",5,fn() => file_get_contents($path));
    }
}
