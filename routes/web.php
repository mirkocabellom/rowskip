<?php

use Illuminate\Support\Facades\Route;

Route::view('/','welcome')->name('welcome');
Route::view('/panel','panel')->name('panel');
Route::view('/monitor','monitor')->name('monitor');
Route::view('/usuario','usuario')->name('usuario');
Route::view('/estacion','estacion')->name('estacion');
Route::view('/gestor_estacion','gestor_estacion')->name('gestor_estacion');

Route::view('/inicio','inicio')->name('inicio');
Route::view('/tv','tv')->name('tv');
Route::view('/totem','totem')->name('totem');