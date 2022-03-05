<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('pages/home'); })->name('home');
Route::get('/roadmap', function () { return view('pages/home'); })->name('roadmap');
Route::get('/components', function () { return view('pages/home'); })->name('components');
Route::get('/demos', function () { return view('pages/home'); })->name('demos');
Route::get('/cheat-sheet', function () { return view('pages/cheat-sheet'); })->name('cheat-sheet');
