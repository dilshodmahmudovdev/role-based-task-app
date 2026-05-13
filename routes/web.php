<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::middleware('guest')->group(function () {
    Route::get('/login', [UserController::class, 'index'])->name('login');
    Route::post('/login', [UserController::class, 'login'])->name('login.post');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/', function () {
        return view('pages.home.index');
    })->name('home');
    Route::get('/tasks', function () {
        return view('pages.tasks.index');
    })->name('tasks');
    Route::get('/workers', function () {
        return view('pages.workers.index');
    })->name('workers');
});
