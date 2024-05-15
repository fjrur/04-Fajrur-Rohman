<?php

use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('home.index');
})->name('home');

Route::get('/package', function() {
    return view('package.index');
})->name('package');

Route::get('/book', function() {
    return view('book.index');
})->name('book');

Route::get('/about', function() {
    return view('about.index');
})->name('about');