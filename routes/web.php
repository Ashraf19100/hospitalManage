<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Userprofile;

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
Route::middleware('auth')->group(function () {
    Route::get('/user_edit/{id}', [Userprofile::class, 'user_edit'])->name('user.edit');
    Route::patch('/profile/updated/{user}', [Userprofile::class, 'update'])->name('user.update');

});

Route::get('/', function () {
    return view('index');
});
Route::get('/emercy_dashboard', function () {
    return view('frontend.emercy_dashboard');
})->middleware(['auth', 'verified'])->name('emercy_dashboard');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
