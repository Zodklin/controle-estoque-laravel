<?php

use App\Http\Controllers\produtosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos',[produtosController::class, 'index']);
