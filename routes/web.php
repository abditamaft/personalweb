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
// ROUTE BARU: Halaman Team
Route::get('/team', function () {
    return view('team'); // Memanggil file resources/views/team.blade.php
});