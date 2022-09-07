<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index']);

Route::resource('/estoque', EstoqueController::class);

#se voce ja criou o CRUD completo, em vez de especificar cada metodo, voce pode utilizar o Route::Resource

#Route::get('/estoque', [EstoqueController::class, 'index']);

Route::get('/estoque/{id}', [EstoqueController::class, 'show']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('login', [LoginController::class, 'login']);

