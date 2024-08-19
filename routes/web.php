<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/auth/redirect/{socialtype}',[AuthController::class,"redirect"]);
Route::get('/auth/callback',[AuthController::class, "callback"]);

Route::get('/', function () {
    return Inertia::render('Show', [
        
    ]);
})->name("/");

Route::get('/logout', function () {
    return Auth::logout();
});


