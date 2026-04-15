<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/impressum', function () {
    return view('impressum');
});
Route::get('/contact', function () {
    return view('contact');
});