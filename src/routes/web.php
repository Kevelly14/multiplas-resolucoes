<?php

use App\Http\Controllers\Site\ContatoController;
use App\Http\Controllers\Site\EquipeController;
use App\Http\Controllers\Site\EstudoController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ServicosController;
use App\Http\Controllers\Site\SobreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sobre', [SobreController::class, 'sobre'])->name('sobre');
Route::get('/equipe', [EquipeController::class, 'equipe'])->name('equipe');
Route::get('/servicos', [ServicosController::class, 'servicos'])->name('servicos');
Route::get('/estudo-casos', [EstudoController::class, 'estudo'])->name('estudo');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');