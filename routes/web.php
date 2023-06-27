<?php

use Illuminate\Support\Facades\Route;

Route::view('/','welcome')->name('welcome');
Route::view('/panel','panel')->name('panel');
Route::view('/monitor','monitor')->name('monitor');
Route::view('/usuario','usuario')->name('usuario');
Route::view('/estacion','estacion')->name('estacion');
Route::view('/gestor_estacion','gestor_estacion')->name('gestor_estacion');

Route::view('inicio','inicio')->name('inicio');
Route::view('/tv','tv')->name('tv');
Route::view('/totem','totem')->name('totem');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


