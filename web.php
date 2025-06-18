<?php
// importando os controllers
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

// Rota para index do projeto
Route::get('/', [ViewController::class, 'index'])->name('agenda.index');

// Rota para Gerenciamento de Contatos
Route::get('/contato', [ContatoController::class, 'index'])->name('contato.index');

Route::post('/contato', [ContatoController::class, 'store'])->name('contato.store');

Route::put('/contato/{id}', [ContatoController::class, 'update'])->name('contato.update');

Route::delete('/contato/{id}', [ContatoController::class, 'destroy'])->name('contato.destroy');
