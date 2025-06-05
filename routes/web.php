<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController;

Route::view('/', 'home')->name('home');

Route::view('contacto', 'contacto')->name('contacto');

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('servicios', [ServiciosController::class, 'index'])->name('servicios.index');
Route::get('servicios/{id}', [ServiciosController::class, 'show'])->name('servicios.show');