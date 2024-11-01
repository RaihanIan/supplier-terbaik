<?php

use App\Http\Controllers\MitraController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return Inertia::render('DashboardView');  
})->name('dashboard');

// Route::get('/mitra', function () {
//     return Inertia::render('MitraView');  
// })->name('mitra');

Route::get('/mitra',[MitraController::class,'index'])->name('mitra.index');
Route::post('/mitra',[MitraController::class,'store'])->name('mitra.store');
Route::delete('/mitra/{mitra}',[MitraController::class,'destroy'])->name('mitra.destroy');
Route::put('/mitra/{mitra}', [MitraController::class, 'update'])->name('mitra.update');

Route::get('/supplier', function () {
    return Inertia::render('SupplierView');  
})->name('supplier');

// User biasa diarahkan ke landing page
Route::get('/landingpage', function () {
    return Inertia::render('LandingPage');  // Komponen Vue untuk landing page user biasa
})->name('landingpage');


require __DIR__.'/auth.php';
