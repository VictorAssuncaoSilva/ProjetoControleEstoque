<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EstoqueController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/estoque', EstoqueController::class);

#se voce ja criou o CRUD completo, em vez de especificar cada metodo, voce pode utilizar o Route::Resource

#Route::get('/estoque', [EstoqueController::class, 'index']);

Route::get('/estoque/{id}', [EstoqueController::class, 'show']);

