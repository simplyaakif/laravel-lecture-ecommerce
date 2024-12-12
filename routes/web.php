<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('welcome');
})->name('home');

Route::get('/blogs', [BlogController::class, 'index'])
    ->name('blogs.index');

Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])
    ->name('blogs.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
