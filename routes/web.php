<?php

use Illuminate\Support\Facades\Route;

// Static pages
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/career', function () {
    return view('career');
})->name('career');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Correct way to handle any unknown or fallback routes
Route::fallback(function () {
    return view('404');
});
