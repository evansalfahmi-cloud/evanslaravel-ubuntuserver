<?php
use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('home');
});

Route::get('/tech', function () {
    return view('tech'); // Mengarahkan ke tech.blade.php
});