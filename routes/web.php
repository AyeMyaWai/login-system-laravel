<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::fallback(function () {
    if (Auth::check()) {
       
        return redirect('/dashboard');
    }

    abort(404);
});
Route::get('/', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout',[AuthController::class,'logout']);
Route::get('/dashboard', function () {
    return view("dashboard");
})->middleware('auth');