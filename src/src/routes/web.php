<?php

use App\Http\Controllers\Site\ContatoController;
use App\Http\Controllers\Site\EquipeController;
use App\Http\Controllers\Site\EstudoController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ServicoController;
use App\Http\Controllers\Site\SobreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/', [SobreController::class, 'sobre'])->name('sobre');
Route::get('/', [EquipeController::class, 'equipe'])->name('equipe');
Route::get('/', [ServicoController::class, 'servicos'])->name('servicos');
Route::get('/', [EstudoController::class, 'estudo-casos'])->name('estudo-casos');
Route::get('/', [ContatoController::class, 'contato'])->name('contato');