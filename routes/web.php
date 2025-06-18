<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;


// profile home
Route::get('/home',[Homecontroller::class,'index'])->name('home.index');

// end profile

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
