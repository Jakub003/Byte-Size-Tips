<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('pages/home'); })->name('home');
Route::get('/roadmap', function () { return view('pages/home'); })->name('roadmap');
Route::get('/components', function () { return view('pages/home'); })->name('components');
Route::get('/demos', function () { return view('pages/home'); })->name('demos');
Route::get('/cheat-sheet', function () { return view('pages/cheat-sheet'); })->name('cheat-sheet');

Route::get('/cheat-sheet/{article}/', function ($slug) {
    $path = __DIR__."/../resources/views/posts/{$slug}.blade.php";

    if(! file_exists($path)) {
        return redirect('/');
    }

    $article = file_get_contents($path);

    return view('pages/article-view', ['article' => $article]);

})->where('article','[A-z_\-0-9]+')->name('cheat-sheet.article');
