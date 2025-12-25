<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
