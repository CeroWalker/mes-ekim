<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

Route::resource('/', HomepageController::class);

Route::get('/hizmetler', function () {
    return view('services');
});

Route::get('/hakkimizda', function () {
    return view('about');
});

Route::get('/iletisim', function () {
    return view('contact');
});
