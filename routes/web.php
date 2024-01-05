<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;


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

Route::resource('karyawans', KaryawanController::class);

Route::get('/karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');

Route::post('/karyawan/store', [KaryawanController::class, 'store'])->name('karyawan.store');

Route::get('/karyawan', 'KaryawanController@index')->name('karyawan.index');

Route::get('/karyawan/{id}', [KaryawanController::class, 'show'])->name('karyawan.show');

Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');

Route::put('/karyawan/{id}/update', [KaryawanController::class, 'update'])->name('karyawan.update');

Route::delete('/karyawan/{id}/delete', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');

Route::get('/karyawan/cuti', [KaryawanController::class, 'cuti'])->name('karyawan.cuti');
