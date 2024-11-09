<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//Route to use SPA in laravel, duno if is the best solution
Route::get('/{any}', function () {
    return view('home');
})->where('any', '.*');