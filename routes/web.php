<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\LivroController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//CLIENTE 

Route::get('/index-cliente', 
    [ClienteController::class,'index']
)->name('cliente.index');

Route::get('/novo-cliente/create', 
    [ClienteController::class,'criar']
)->name('cliente.create');

Route::post('/novo-cliente/salvar', 
    [ClienteController::class,'salvar']
)->name('cliente.salvar');

Route::delete('/excluir-cliente/{id}', 
    [ClienteController::class, 'excluir'])
->name('cliente.excluir');

Route::get('/editar-cliente/{id}', 
    [ClienteController::class, 'editar'])
->name('cliente.editar');

Route::put('/update-cliente/{id}', 
    [ClienteController::class, 'update'])
->name('cliente.update');


//FUNCIONARIO

Route::get('/index-funcionario', 
    [FuncionarioController::class,'index']
)->name('funcionario.index');

Route::get('/novo-funcionario/create', 
    [FuncionarioController::class,'criar']
)->name('funcionario.create');

Route::post('/novo-funcionario/salvar', 
    [FuncionarioController::class,'salvar']
)->name('funcionario.salvar');

Route::delete('/excluir-funcionario/{id}', 
    [FuncionarioController::class, 'excluir'])
->name('funcionario.excluir');

Route::get('/editar-funcionario/{id}', 
    [FuncionarioController::class, 'editar'])
->name('funcionario.editar');

Route::put('/update-funcionario/{id}', 
    [FuncionarioController::class, 'update'])
->name('funcionario.update');

//LIVRO

Route::get('/index-livro', 
    [LivroController::class,'index']
)->name('livro.index');

Route::get('/novo-livro/create', 
    [LivroController::class,'criar']
)->name('livro.create');

Route::post('/novo-livro/salvar', 
    [LivroController::class,'salvar']
)->name('livro.salvar');

Route::delete('/excluir-livro/{id}', 
    [LivroController::class, 'excluir'])
->name('livro.excluir');

Route::get('/editar-livro/{id}', 
    [LivroController::class, 'editar'])
->name('livro.editar');

Route::put('/update-livro/{id}', 
    [LivroController::class, 'update'])
->name('livro.update');

// EMPRESTIMO

Route::get('/', 
    [EmprestimoController::class, 'index'])
->name('emprestimo.index')->middleware(['auth']);

Route::get('/novo-emprestimo/create', 
    [EmprestimoController::class,'criar']
)->name('emprestimo.create');

Route::post('/novo-emprestimo/salvar', 
    [EmprestimoController::class,'salvar']
)->name('emprestimo.salvar');

Route::delete('/excluir-emprestimo/{id}', 
    [EmprestimoController::class, 'excluir'])
->name('emprestimo.excluir');

Route::get('/editar-emprestimo/{id}', 
    [EmprestimoController::class, 'editar'])
->name('emprestimo.editar');

Route::put('/update-emprestimo/{id}', 
    [EmprestimoController::class, 'update'])
->name('emprestimo.update');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/esqueceusenha', function () {
    return view('esqueceusenha');
})->name('esqueceusenha');


require __DIR__.'/auth.php';
 