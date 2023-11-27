<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// Route de bienvenue du projet en développement Laravel
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [BlogController::class, 'index'])->name('home');


Route::get('/resume', [BlogController::class, 'resume'])->name('resume');


Route::get('/projects', [BlogController::class, 'projects'])->name('projects');


Route::get('/contact', [BlogController::class, 'contact'])->name('contact');
Route::post('/contact', [BlogController::class, 'message'])->name('contact');
