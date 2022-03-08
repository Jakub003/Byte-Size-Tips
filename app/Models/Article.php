<?php

namespace App\Models;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Article
{
    public static function all()
    {
        $files = File::files(resource_path("/views/posts/"));

        return array_map(function ($file) {
            return $file->getContents();
        }, $files);


    }

    public static function find($slug)
    {
        $path = resource_path("/views/posts/{$slug}.blade.php");

        if(! file_exists($path)) {
           throw new ModelNotFoundException();
        }

        return cache()->remember("article.{$slug}", 5, function() use($path) {
             return file_get_contents($path);
        });
        // return cache()->remember("article.{$slug}",5,fn() => file_get_contents($path));
    }
}
