<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/index-cliente', function () {
    return view('indexcliente');
})->name('indexcliente');

Route::get('/novo-cliente', function () {
    return view('novocliente');
})->name('novocliente');

Route::get('/editar-cliente', function () {
    return view('editarcliente');
})->name('editarcliente');

Route::get('/index-funcionario', function () {
    return view('indexfuncionario');
})->name('indexfuncionario');

Route::get('/novo-funcionario', function () {
    return view('novofuncionario');
})->name('novofuncionario');

Route::get('/editar-funcionario', function () {
    return view('editarfuncionario');
})->name('editarfuncionario');

Route::get('/index-livro', function () {
    return view('indexlivro');
})->name('indexlivro');

Route::get('/novo-livro', function () {
    return view('novolivro');
})->name('novolivro');

Route::get('/editar-livro', function () {
    return view('editarlivro');
})->name('editarlivro');

Route::get('/novo-emprestimo', function () {
    return view('novoemprestimo');
})->name('novoemprestimo');

Route::get('/editar-emprestimo', function () {
    return view('editaremprestimo');
})->name('editaremprestimo');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/esqueceusenha', function () {
    return view('esqueceusenha');
})->name('esqueceusenha');

Route::get('/template', function () {
    return view('sitelayout.template');
});

