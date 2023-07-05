<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaneladminController; 

Route::view('/panel','panel')->name('panel');
Route::view('/usuario','usuario')->name('usuario');
Route::view('/estacion','estacion')->name('estacion');
Route::view('/gestor_estacion','gestor_estacion')->name('gestor_estacion');

Route::get('/monitor', [PaneladminController::class, 'index'])->name('monitor');
Route::get('/agenda', [PaneladminController::class, 'list_age_disp'])->name('agenda');
Route::get('/citas', [PaneladminController::class, 'list_appointment'])->name('citas');

Route::view('/','inicio')->name('inicio');
Route::view('/tv','tv')->name('tv');
Route::view('/totem','totem')->name('totem');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


