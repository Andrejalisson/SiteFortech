<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/Sobre', 'sobre');
    Route::get('/Servicos', 'servicos');
    Route::get('/Assistencia', 'assistencia');
});
