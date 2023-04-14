<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->name('dashboard');

Route::get('/tambah-data', [PenyewaController::class, 'tambahdata'])->name('tambahdata');
Route::get('/dashboard', [PenyewaController::class, 'index'])->name('dashboard');
Route::post('/insert-data', [PenyewaController::class, 'insertdata'])->name('insertdata');
Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/logout', [ProfileController::class, 'logout'])->name('logout');
require __DIR__.'/auth.php';