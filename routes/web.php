<?php

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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
Route::get('/usuario/incluir', function () {
    return view('usuario.incluir');
});
*/

//Listar Usuário
Route::get('/usuario/listar', 'UsuarioController@index')->name('usuario.listar');

//Incluir Usuário
Route::get('/usuario/incluir', 'UsuarioController@new')->name('usuario.incluir');
Route::post('/usuario/salvar', 'UsuarioController@create')->name('usuario.salvar');

//Alterar Usuário
Route::get('/usuario/alterar/{id}', 'UsuarioController@update')->name('usuario.update');
Route::post('/usuario/update/{id}', 'UsuarioController@save')->name('usuario.atualizar');

//Remover Usuário
Route::get('/usuario/deletar/{id}', 'UsuarioController@delete')->name('usuario.deletar');
Route::post('/usuario/excluir/{id}', 'UsuarioController@excluir')->name('usuario.excluir');

//Consultar Usuário
Route::get('/usuario/consultar/{id}', 'UsuarioController@view')->name('usuario.consultar');

//Cancelar
Route::get('/usuario/cancelar', 'UsuarioController@cancel')->name('usuario.cancelar');


//----------------------------------Rota Principal-----------------------------------
Auth::routes();

//Home
Route::get('/home', 'HomeController@index')->name('home');

//Pesquisar Usuário
Route::any('/usuario/pesquisar', 'UsuarioController@search')->name('usuario.pesquisar');
