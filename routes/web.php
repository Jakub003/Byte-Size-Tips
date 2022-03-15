<?php

use App\Models\Article;
use App\Models\CheatSheet;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('pages/home'); })->name('home');
Route::get('/contact', function () { return view('pages/contact'); })->name('contact');


Route::get('/cheat-sheet/{article}', function ($slug) {
    $path = resource_path("/views/articles/cheat-sheet/{$slug}.blade.php");
    if(! file_exists($path)) {
        abort(404);
    }
     return view('articles/cheat-sheet/'.$slug);

})->where('article','[A-z_\-0-9]+')->name('cheat-sheet');

Route::get('/roadmap/{article}', function ($slug) {
    $path = resource_path("/views/articles/roadmap/{$slug}.blade.php");
    if(! file_exists($path)) {
        abort(404);
    }
     return view('articles/roadmap/'.$slug);

})->where('article','[A-z_\-0-9]+')->name('roadmap');

Route::get('/features/{article}', function ($slug) {
    $path = resource_path("/views/articles/features/{$slug}.blade.php");
    if(! file_exists($path)) {
        abort(404);
    }
     return view('articles/features/'.$slug);

})->where('article','[A-z_\-0-9]+')->name('features');

Route::get('/components/{article}', function ($slug) {
    $path = resource_path("/views/articles/components/{$slug}.blade.php");
    if(! file_exists($path)) {
        abort(404);
    }
     return view('articles/components/'.$slug);

})->where('article','[A-z_\-0-9]+')->name('components');

Route::get('/getting-started/{article}', function ($slug) {
    $path = resource_path("/views/articles/getting-started/{$slug}.blade.php");
    if(! file_exists($path)) {
        abort(404);
    }
     return view('articles/getting-started/'.$slug);

})->where('article','[A-z_\-0-9]+')->name('getting-started');

// test
Route::get('/test2', function () { return view('/markdown/test2'); })->name('home2');

Route::get('/test/{article}', function ($slug) {
    $test = Article::test($slug);
    return view('test',['test' => $test]);

})->where('article','[A-z_\-0-9]+')->name('test');

Route::get('/all', function () {
    $files = Article::all();
    dd($files[0]->getFilename());

})->name('test3');
