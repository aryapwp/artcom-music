<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/artist', function () {
    return view('artist');
});
Route::get('/artist-photos', function () {
    return redirect('/artist');
});
Route::get('/impressum', function () {
    return view('impressum');
});
Route::get('/contact', function () {
    return view('contact');
});
