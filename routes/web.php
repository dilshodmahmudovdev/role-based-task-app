<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.index');
})->name('home');
Route::get('/tasks', function () {
    return view('pages.tasks.index');
})->name('tasks');
Route::get('/workers', function () {
    return view('pages.workers.index');
})->name('workers');
