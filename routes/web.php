<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaneladminController; 

Route::view('/usuario','usuario')->name('usuario');
Route::view('/estacion','estacion')->name('estacion');
Route::view('/gestor_estacion','gestor_estacion')->name('gestor_estacion');
Route::view('/dashboard','dashboard')->name('dashboard');
Route::view('/reset_pass','reset_pass')->name('reset_pass');

Route::get('/panel', [PaneladminController::class, 'index'])->name('panel');
Route::get('/agenda', [PaneladminController::class, 'list_age_disp'])->name('agenda');
Route::get('/citas', [PaneladminController::class, 'list_appointment'])->name('citas');
//Route::get('/Dashboard', [PaneladminController::class, 'list_appointment'])->name('Dashboard');


Route::get('/totem', [PaneladminController::class, 'find_appointment_pac'])->name('totem');
Route::view('/','inicio')->name('inicio');
Route::view('/tv','tv')->name('tv');
