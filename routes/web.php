<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaneladminController; 
use App\Http\Controllers\TotemController; 

Route::view('/estacion','estacion')->name('estacion');
Route::view('/gestor_estacion','gestor_estacion')->name('gestor_estacion');
Route::view('/dashboard','dashboard')->name('dashboard');
Route::view('/reset_pass','reset_pass')->name('reset_pass');
Route::view('/profile','profile')->name('profile');

Route::get('/panel', [PaneladminController::class, 'index'])->name('panel');
Route::get('/agenda', [PaneladminController::class, 'list_age_disp'])->name('agenda');
Route::get('/citas', [PaneladminController::class, 'list_appointment'])->name('citas');
Route::get('/usuario', [PaneladminController::class, 'listuser'])->name('usuario');
Route::get('/obtener_token', [PaneladminController::class, 'obtener_token'])->name('obtener_token');
Route::post('/registrar_usuario', [PaneladminController::class, 'registrar_usuario'])->name('registrar_usuario');
Route::post('/primera_pass', [PaneladminController::class, 'primera_pass'])->name('primera_pass');
Route::post('/panel_admin_login', [PaneladminController::class, 'panel_admin_login'])->name('panel_admin_login');

//Route::get('/Dashboard', [PaneladminController::class, 'list_appointment'])->name('Dashboard');
Route::get('/totem', [TotemController::class, 'find_appointment_pac'])->name('totem');
Route::get('/totem_result', [TotemController::class, 'find_appointment_pac'])->name('totem_result');
Route::view('/','inicio')->name('inicio');
Route::view('/tv','tv')->name('tv');
