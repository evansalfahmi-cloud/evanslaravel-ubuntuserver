<?php
use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/tech', function () {
    return view('tech'); // Mengarahkan ke tech.blade.php
});

Route::get('/history', function () {
    return view('history');
});