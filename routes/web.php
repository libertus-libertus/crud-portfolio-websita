<?php

use App\Http\Controllers\WargaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::middleware(["auth"])->group(function () {
    Route::get('/warga', [WargaController::class, 'index'])->name('warga.page');
    Route::get('/warga/create', [WargaController::class, 'create'])->name('warga.create.page');
    Route::post('/warga/store', [WargaController::class, 'store'])->name('warga.store.page');
    Route::get('/warga/{id}/edit', [WargaController::class, 'edit'])->name('warga.edit.page');
    Route::put('/warga/{id}', [WargaController::class, 'update'])->name('warga.update.page');
    Route::delete('/warga/{id}', [WargaController::class, 'destroy'])->name('warga.destroy.page');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
