<?php

use App\Models\Article;
use App\Models\CheatSheet;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('pages/home'); })->name('home');
Route::get('/contact', function () { return view('pages/contact'); })->name('contact');

Route::get('/getting-started/{article}', function ($slug) {
    $article = Article::find('getting-started',$slug);

    return view('pages.article-view',['article' => $article]);

})->where('article','[A-z_\-0-9]+')->name('getting-started');

Route::get('/cheat-sheet/{article}', function ($slug) {
    $article = Article::find('cheat-sheet',$slug);

    return view('pages.article-view',['article' => $article]);

})->where('article','[A-z_\-0-9]+')->name('cheat-sheet');

Route::get('/roadmap/{article}', function ($slug) {
    $article = Article::find('roadmap',$slug);

    return view('pages.article-view',['article' => $article]);

})->where('article','[A-z_\-0-9]+')->name('roadmap');

Route::get('/features/{article}', function ($slug) {
    $article = Article::find('features',$slug);

    return view('pages.article-view',['article' => $article]);

})->where('article','[A-z_\-0-9]+')->name('features');

Route::get('/components/{article}', function ($slug) {
    $article = Article::find('components',$slug);

    return view('pages.article-view',['article' => $article]);

})->where('article','[A-z_\-0-9]+')->name('components');





// Route::get('/test2', function () { return view('/markdown/test2'); })->name('home2');

// Route::get('/test/{article}', function ($slug) {
//     $test = Article::test($slug);
//     return view('test',['test' => $test]);

// })->where('article','[A-z_\-0-9]+')->name('test');

// Route::get('/all', function () {
//     $files = Article::all();
//     dd($files[0]->getFilename());

// })->name('test3');
