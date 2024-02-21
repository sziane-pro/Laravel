<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BedroomController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    //Gestion des réservations
    Route::get('/bedroom/{bedroom_id}/reservation', [ReservationController::class, 'create'])->name('reservations.create');
    Route::post('/bedroom/{bedroom_id}/reservation', [ReservationController::class, 'store'])->name('reservations.store');
    Route::get('/bedroom/{bedroom_id}/reservations', [ReservationController::class, 'index'])->name('reservations.index');

    //Gestion des chambres d'hotels
    Route::get('/hotel/{id}/bedroom', [BedroomController::class, 'create'])->name('bedrooms.create');
    Route::post('/hotel/{id}/bedroom', [BedroomController::class, 'store'])->name('bedrooms.store');
    Route::get('/hotel/{id}/bedrooms/', [BedroomController::class, 'index'])->name('bedrooms.index');
    Route::get('/bedrooms/{id}/edit',[BedroomController::class, 'edit'])->name('bedrooms.edit');
    Route::put('/bedrooms/{id}/update', [BedroomController::class, 'update'])->name('bedrooms.update');
    Route::delete('/hotel/{id}/bedroom',[BedroomController::class, 'destroy'])->name('bedrooms.destroy');
    //Gestion des hotels
    Route::get('/hotel', [HotelController::class, 'create'])->name('hotels.create');
    Route::post('/hotel', [HotelController::class, 'store'])->name('hotels.store');
    Route::get('/hotels', [HotelController::class, 'index'])->name('hotels.index');
    Route::get('/hotel/{id}/edit',[HotelController::class, 'edit'])->name('hotels.edit');
    Route::put('/hotel/{id}/update',[HotelController::class, 'update'])->name('hotels.update');
    Route::delete('/hotel', [HotelController::class, 'destroy'])->name('hotels.destroy');
    //Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
