<?php

use Illuminate\Support\Facades\Route;
use App\Models\CheatSheet;


Route::get('/', function () { return view('pages/home'); })->name('home');
Route::get('/roadmap', function () { return view('pages/roadmap'); })->name('roadmap');
Route::get('/features', function () { return view('pages/roadmap'); })->name('features');
Route::get('/guides', function () { return view('pages/roadmap'); })->name('guides');
Route::get('/components', function () { return view('pages/home'); })->name('components');
Route::get('/demos', function () { return view('pages/home'); })->name('demos');

Route::get('/cheat-sheets', function () {
    $articles = CheatSheet::all();

    return view('pages/cheat-sheet', [
        'articles' => $articles
    ]);

})->name('cheatsheet');

Route::get('/cheat-sheet/{article}/', function ($slug) {
    $article = CheatSheet::find($slug);

    return view('pages/article-view', [
        'article' => $article
    ]);

})->where('article','[A-z_\-0-9]+')->name('cheat-sheet.article');
