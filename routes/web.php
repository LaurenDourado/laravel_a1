<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Rotas de usuários
Route::resource('users', UserController::class);

// Rota da galeria de fotos
Route::get('/fotos', function () {
    return view('fotos.index');
})->name('fotos.index');