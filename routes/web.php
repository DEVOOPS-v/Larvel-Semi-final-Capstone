<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\VetsController;
use App\Http\Controllers\PetsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 1. HOME / LANDING PAGE (Clinic homepage with mission statement)
Route::get('/', function () {
    return view('pages.landing');
})->name('home');

// 2. VETS INDEX PAGE (Data-driven page)
Route::get('/vets', [VetsController::class, 'index'])->name('vets.index');

// 3. PETS INDEX PAGE (Data-driven page)
Route::get('/pets', [PetsController::class, 'index'])->name('pets.index');

// NEW ROUTE: View a single pet's profile
// This dynamic route uses a wildcard {pet} and assumes the PetController has a 'show' method.
Route::get('/pets/{pet}', [PetsController::class, 'show'])->name('pets.show');

// 4. APPOINTMENTS INDEX PAGE (The main records/index page)
Route::get('/appointments', [AppointmentsController::class, 'index'])->name('appointments.index');

// 5. STATIC PAGE (About)
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
