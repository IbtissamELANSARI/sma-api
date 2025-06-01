<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SecteurController;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

// Secteurs routes
Route::resource('secteurs', SecteurController::class)
    ->middleware('auth:sanctum');

require __DIR__ . '/auth.php';
