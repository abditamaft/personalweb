<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('profile');
});
// TAMBAHAN
Route::get('/biodata', function () {
    return view('biodata');
});
Route::get('/pendidikan', function () {
    return view('pendidikan');
});
Route::get('/prestasi', function () {
    return view('prestasi');
});