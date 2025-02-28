<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PassagerController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ChauffeurController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;


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
Route::get('/dashboard',[ChauffeurController::class,'dashbord'])->name('dashboard.dashbord');
Route::post('/dashboard/accepte/{id}' ,[ChauffeurController::class, 'accepte'])->name('reservation.accepte');
Route::post('/dashboard/annule/{id}' ,[ChauffeurController::class, 'annule'])->name('reservation.annule');
Route::get('/trajet' ,[ChauffeurController::class, 'create'])->name('trajet.create');
// Route::get('/lesTrajet' ,[ChauffeurController::class, 'lesTrajet'])->name('trajet.create');
Route::post('/trajets' ,[ChauffeurController::class, 'store'])->name('trajet.store');
Route::get('/trajet/dashboard' ,[ChauffeurController::class, 'lesTrajet'])->name('trajet.lesTrajet');
Route::get('/trajet/edit/{id}',[ChauffeurController::class ,'edit'])->name('trajet.edit');
Route::post('/trajet/update/{id}',[ChauffeurController::class ,'update'])->name('trajet.update');
Route::delete('/trajet/delete/{id}',[ChauffeurController::class ,'destroy'])->name('trajet.delete');
Route::post('/create/reservation' ,[ReservationController::class,'store'])->name('reservation.store');




// Route::get('/get-cities', function () {
//     $file = __DIR__ . '/../public/storage/city.json';
    
//     if (!file_exists($file)) {
//         return response()->json(['error' => 'File not found'], 404);
//     }

//     return Response::file($file, ['Content-Type' => 'application/json']);
// });

require __DIR__.'/auth.php';
