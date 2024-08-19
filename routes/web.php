<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/auth/redirect/{socialtype}',[AuthController::class,"redirect"]);
Route::get('/auth/callback',[AuthController::class, "callback"]);

Route::get('/',[HomeController::class,"index"])->name("/");

Route::get('/logout', function () {
    return Auth::logout();
});


