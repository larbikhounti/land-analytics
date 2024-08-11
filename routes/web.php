<?php

use App\Http\Controllers\Auth\AuthController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/auth/redirect/{socialtype}',[AuthController::class,"redirect"]);

Route::get('/', function () {
    return Auth::user();
});
 
Route::get('/auth/callback',[AuthController::class, "callback"]);
