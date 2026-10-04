<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/news', function () {
    return view('news', ['news' => config('news')]);
});
Route::get('/news/{slug}', function ($slug) {
    $item = collect(config('news'))->firstWhere('slug', $slug);

    abort_unless($item, 404);

    return view('news-detail', ['item' => $item]);
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
