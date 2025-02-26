<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PassagerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $id = Auth::user()->id; 
    return view('dashboard',["id"=>$id]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home' , [PassagerController::class ,'index'])->name('home');

require __DIR__.'/auth.php';
