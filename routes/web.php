<?php

use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [AbonnementController::class, "index"])->name('home');
Route::get('about', [AbonnementController::class, "about"])->name('about');
Route::get('services/', [AbonnementController::class, "service"])->name('services');
Route::get('live/', [AbonnementController::class, "live"])->name('live');
Route::get('agenda/', [AbonnementController::class, "agenda"])->name('agenda');
Route::get('abonnement/', [AbonnementController::class, "abonnement"])->name('abonnement');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
