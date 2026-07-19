<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\areaController;
use App\Http\Controllers\jenisKenController;
use App\Http\Controllers\logAktivitasControlle;
use App\Http\Controllers\tarifController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard/admin', [adminController::class, 'dashboard'])->name('dashboard.admin');

// for area
Route::get('/dashboard/admin/area', [areaController::class, 'area'])->name('dashboard.area');
Route::post('/dashboard/admin/area/submit', [areaController::class, 'store'])->name('area.store');
Route::delete('/dashboard/admin/area/{id}', [areaController::class, 'destroy'])->name('area.destroy');
Route::get('/dashboard/admin/area/{id}/edit', [areaController::class, 'edit'])->name('area.edit');
Route::put('/dashboard/admin/area/{id}', [areaController::class, 'update'])->name('area.update');


Route::get('/dashboard/admin/kendaraan', [jenisKenController::class, 'kendaraan'])->name('dashboard.kendaraan');

Route::get('/dashboard/admin/tarif', [tarifController::class, 'tarif'])->name('dashboard.tarif');
Route::post('/dashboard/admin/tarif/submit', [tarifController::class, 'store'])->name('tarif.store');
Route::delete('/dashboard/admin/tarif/{id}', [tarifController::class, 'destroy'])->name('tarif.destroy');
Route::get('/dashboard/admin/tarif/{id}/edit', [tarifController::class, 'edit'])->name('tarif.edit');
Route::put('/dashboard/admin/tarif/{id}', [tarifController::class, 'update'])->name('tarif.update');

Route::get('/dashboard/admin/log-aktivitas', [logAktivitasControlle::class, 'log'])->name('dashboard.logAktivitas');