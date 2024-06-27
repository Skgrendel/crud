<?php

use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\PersonalsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeccionesController;
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
    return view('login');
});

Route::get('/dashboard', function () {
    return redirect()->route('personals.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/personals',PersonalsController::class)->names('personals');
    Route::resource('/seccion', SeccionesController::class)->names('secciones');
    Route::resource('/departamento', DepartamentosController::class)->names('departamentos');
});

require __DIR__.'/auth.php';
