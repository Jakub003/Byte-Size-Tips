<?php

use App\Models\Article;
use App\Models\CheatSheet;
use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('pages/home'); })->name('home');
Route::get('/roadmap', function () { return view('pages/roadmap/index'); })->name('roadmap');
Route::get('/features', function () { return view('pages/features/index'); })->name('features');
Route::get('/guides', function () { return view('pages/guides/index'); })->name('guides');
Route::get('/components', function () { return view('pages/components/index'); })->name('components');
Route::get('/cheat-sheet', function () { return view('pages/cheatsheet/index'); })->name('cheat-sheet');
Route::get('/demos', function () { return view('pages/home'); })->name('demos');

// Route::get('/cheat-sheet', function () {
//     $articles = Article::all();

//     return view('pages/cheatsheet/index', [
//         'articles' => $articles
//     ]);

// })->name('cheat-sheet');

Route::get('/cheat-sheet/{article}/', function ($slug) {
    $article = Article::find($slug);

    return view('pages/article-view', [
        'article' => $article
    ]);

})->where('article','[A-z_\-0-9]+')->name('cheat-sheet.article');
