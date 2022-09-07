<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
    
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');


Route::get('news', function () {
    return view('news');
});

Route::get('teams', function () {
    return view('teams');
});



Route::get('rank', function () {
    return view('rank');
});