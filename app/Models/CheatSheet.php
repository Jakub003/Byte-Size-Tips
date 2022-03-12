<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CheatSheet
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
        $path = resource_path("/views/markdown/{$slug}.md");

        if(! file_exists($path)) {
           throw new ModelNotFoundException();
        }

        return cache()->remember("article.{$slug}", 5, function() use($path) {
             return file_get_contents($path);
        });
        // return cache()->remember("article.{$slug}",5,fn() => file_get_contents($path));
    }
}
