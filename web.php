<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Homecontroller; 
use App\Http\Controllers\Rentalcontroller; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home'); // Pastikan file resources/views/home.blade.php ada dan isinya betul
})->name('home');

// Login routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});


// Halaman rental mobil
Route::get('/cars', [CarController::class, 'index']);
Route::get('/rent/{id}', [CarController::class, 'show']);
Route::post('/rent/{id}', [CarController::class, 'store']);

// Dashboard admin dan kelola mobil (harus login)
Route::middleware('auth')->group(function () {
    Route::get('/admin/cars', [AdminController::class, 'index'])->name('admin.cars.index');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/admin/cars/create', [AdminController::class, 'create']);
    Route::post('/admin/cars', [AdminController::class, 'store']);
    Route::get('/admin/cars/{id}/edit', [AdminController::class, 'edit'])->name('admin.cars.edit');
    Route::put('/admin/cars/{id}', [AdminController::class, 'update'])->name('admin.cars.update');
    Route::delete('/admin/cars/{id}', [AdminController::class, 'destroy']);
    Route::post('/rent/{id}', [CarController::class, 'store']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/rent/confirmation/{id}', [CarController::class, 'confirmation'])->name('rent.confirmation');
    Route::put('/admin/cars/{car}', [CarController::class, 'update'])->name('admin.cars.update');
    Route::get('/admin/cars/confirmation/{id}', [CarController::class, 'confirmation'])->name('admin.cars.confirmation');
    Route::get('/admin/rental/{rentalId}/edit', [CarController::class, 'editRental'])->name('rental.edit');
    Route::put('/admin/rental/{rentalId}', [CarController::class, 'updatePenyewa'])->name('rental.updatePenyewa');
    Route::get('/admin/rental/{rentalId}', [CarController::class, 'showRental'])->name('rental.show');
    Route::put('/rental/{id}', [RentalController::class, 'update'])->name('rental.update');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/rental/{id}/confirmation', [RentalController::class, 'confirmation'])->name('rent.confirmation');
});