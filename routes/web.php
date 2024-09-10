<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', [UserController::class, 'index'])->name("users");
Route::get('users/create', [UserController::class, 'create'])->name("users.create");
Route::post('users/store', [UserController::class, 'store'])->name("users.store");