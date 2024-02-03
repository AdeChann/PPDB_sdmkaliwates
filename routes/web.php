<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftaranController;
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



// Route::middleware(['auth', 'verified', 'role:user|admin'])->group(function () {
//     Route::get('/pendaftaran', [PendaftaranController::class, 'create'])->name('user.create');
//     Route::post('/store', [PendaftaranController::class, 'store'])->name('user.store');
// });

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
Route::get('/pendaftaran', [PendaftaranController::class, 'create'])->name('user.create');
Route::post('/store', [PendaftaranController::class, 'store'])->name('user.store');
Route::get('/admin', [PendaftaranController::class, 'index']);
Route::get('/user/{id}/edit', [PendaftaranController::class, 'edit'])->name('edit');
Route::put('/user/{id}', [PendaftaranController::class, 'update'])->name('update');
Route::delete('/user/{id}', [PendaftaranController::class, 'destroy'])->name('destroy');

});
// route pendaftaran user
Route::get('/pendaftaran',[HomeController::class, 'pendaftaranSiswa'])->middleware(['auth', 'verified']);
Route::post('/store', [HomeController::class, 'store'])->name('user.store')->middleware(['auth', 'verified']);
// end route pendaftaran user

Route::get('tambah',function (){
    return '<h1>tambah</h1>';
})->middleware(['auth', 'verified','role_or_permission:tambah-pengguna|admin']);
require __DIR__.'/auth.php';
