<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('v1/usu/datalist/{est}', [UserController::class, 'listUser'])->name('list_user');
Route::post('v1/usu/cons_user', [UserController::class, 'cons_user'])->name('cons_user');
Route::post('v1/usu/registrar_usuario', [UserController::class, 'registrar_usuario'])->name('registrar_usuario');
Route::post('v1/usu/primera_pass', [UserController::class, 'primera_pass'])->name('primera_pass');
Route::post('v1/usu/reset_pass', [UserController::class, 'reset_pass'])->name('reset_pass');

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
