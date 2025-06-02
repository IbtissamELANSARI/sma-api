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

Route::get('/debug-sanctum', function () {
    return response()->json([
        'request_host' => request()->getHost(),
        'request_origin' => request()->header('Origin'),
        'sanctum_domains' => config('sanctum.stateful'),
        'frontend_url' => config('app.frontend_url'),
    ]);
});