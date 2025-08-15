<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HubungiKamiController;


Route::get('/', function () {
    return view('beranda');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/tempat', function () {
    return view('tempat');
});

// Route::get('/hubungi-kami', [HubungiKamiController::class, 'index'])->name('hubungi.kami');
Route::post('/hubungi-kami', [HubungiKamiController::class, 'kirim'])->name('hubungi.kirim');
