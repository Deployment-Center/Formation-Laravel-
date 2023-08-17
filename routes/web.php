<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\TestController;
use App\Models\Produit;
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

Route::get('/listes', [CarController::class, 'index'])->name('cars.listes');
Route::get('/create', [CarController::class, 'create'])->name('cars.create');
Route::post('/store', [CarController::class, 'store'])->name('cars.store');
Route::get('/edit/{id}', [CarController::class, 'edit'])->name('cars.edit');
Route::put('/update', [CarController::class, 'update'])->name('cars.update');
Route::delete('/destroy/{id}', [CarController::class, 'destroy'])->name('cars.destroy');
