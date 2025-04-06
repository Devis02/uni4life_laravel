<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\SaldoController;
use App\Http\Controllers\CadastroController;

Route::get('/', function () {
    return view('login');
});

Route::get('feed', [FeedController::class, 'index']);

Route::get('saldo',[SaldoController::class,'index']);

Route::post('feed/create', [FeedController::class, 'create']);

Route::get('cadastro',[CadastroController::class,'index']);

route::post('cadastro/create',[CadastroController::class, 'create']);