<?php

use App\Http\Controllers\ConvertImageController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Login
Route::get('/test', function () {
    return view('auth.test');
})->middleware(['auth', 'verified'])->name('test');

// Convert
Route::middleware('auth')->group(function () {
    Route::get('/home/convert', [ConvertImageController::class, 'index'])->name('home');
    Route::post('/home/convert', [ConvertImageController::class, 'uploadImage'])->name('convert-image');
});

// UI
Route::get('/home/convert/add', function () {
    return view('convert.add-file');
})->middleware(['auth', 'verified'])->name('add');

Route::get('/home/convert/edit', function () {
    return view('convert.edit-file');
})->middleware(['auth', 'verified'])->name('edit');

Route::get('/home/convert/download', function () {
    return view('convert.download-file');
})->middleware(['auth', 'verified'])->name('download');

require __DIR__ . '/auth.php';
