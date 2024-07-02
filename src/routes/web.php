<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

Route::middleware(['throttle:100,1'])->group(function () {
    Auth::routes();
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('admin');

Route::get('/', [ContactController::class, 'create'])->name('contact.create');
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/thanks', [ContactController::class, 'store'])->name('contact.store');
Route::get('/thanks', [ContactController::class, 'thanks'])->name('contact.thanks');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
