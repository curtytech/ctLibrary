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
    return view('welcome');
});

Route::get('/livro/novo', 'LivrosController@create');   
Route::post('/livro/novo', 'LivrosController@store')->name('salvar_livro');   
Route::get('/livro/ver', 'LivrosController@show');
Route::get('/livro/del/{id}', 'LivrosController@destroy')->name('excluir_livro');
Route::get('/livro/edit/{id}', 'LivrosController@edit')->name('editar_livro');
Route::post('/livro/update/{id}', 'LivrosController@update')->name('atualizar_livro');

