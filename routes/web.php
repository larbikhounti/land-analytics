<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/auth/redirect/{socialtype}',[AuthController::class,"redirect"]);

Route::get('/', function () {
    return Auth::user();
})->name("/");

Route::get('/logout', function () {
    return Auth::logout();
});

Route::get('/auth/callback',[AuthController::class, "callback"]);
