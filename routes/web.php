<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PassagerController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ChauffeurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard2', function () {
    $id = Auth::user()->id; 
    return view('dashboard',["id"=>$id]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home' , [PassagerController::class ,'index'])->name('home');
Route::get('/reservation',[ReservationController::class,'index'])->name('reservation');
Route::get('/dashboard',[ChauffeurController::class,'dashbord']);
Route::post('/dashboard/accepte/{id}' ,[ChauffeurController::class, 'accepte'])->name('reservation.accepte');
Route::post('/dashboard/annule/{$id}' ,[ChauffeurController::class, 'annule'])->name('reservation.annule');

require __DIR__.'/auth.php';
