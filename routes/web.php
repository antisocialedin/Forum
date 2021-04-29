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


Route::prefix('usuario')->group(function()
{
    //Listar Usuário
    Route::get('/listar', 'UsuarioController@index')->name('usuario.listar');
    //Pesquisar Usuário
    Route::any('/pesquisar', 'UsuarioController@search')->name('usuario.pesquisar');
    //Incluir Usuário
    Route::get('/incluir', 'UsuarioController@new')->name('usuario.incluir');
    Route::post('/salvar', 'UsuarioController@create')->name('usuario.salvar');
    //Alterar Usuário
    Route::get('/alterar/{id}', 'UsuarioController@update')->name('usuario.update');
    Route::post('/update/{id}', 'UsuarioController@save')->name('usuario.atualizar');
    //Remover Usuário
    Route::get('/deletar/{id}', 'UsuarioController@delete')->name('usuario.deletar');
    Route::post('/excluir/{id}', 'UsuarioController@excluir')->name('usuario.excluir');
    //Consultar Usuário
    Route::get('/consultar/{id}', 'UsuarioController@view')->name('usuario.consultar');
    //Cancelar Usuário
    Route::get('/cancelar', 'UsuarioController@cancel')->name('usuario.cancelar');
});

Route::prefix('comunidade')->group(function ()
{
    //Listar Comunidade
    Route::get('/listar', 'ComunidadeController@index')->name('comunidade.listar');
    //Pesquisar Comunidade
    Route::any('/pesquisar', 'ComunidadeController@search')->name('comunidade.pesquisar');
    //Incluir Comunidade
    Route::get('/incluir', 'ComunidadeController@new')->name('comunidade.incluir');
    Route::post('/salvar', 'ComunidadeController@create')->name('comunidade.salvar');
    //Alterar Comunidade
    Route::get('/alterar/{id}', 'ComunidadeController@update')->name('comunidade.update');
    Route::post('/update/{id}', 'ComunidadeController@save')->name('comunidade.atualizar');
    //Remover Comunidade
    Route::get('/deletar/{id}', 'ComunidadeController@delete')->name('comunidade.deletar');
    Route::post('/excluir/{id}', 'ComunidadeController@excluir')->name('comunidade.excluir');
    //Consultar Comunidade
    Route::get('/consultar/{id}', 'ComunidadeController@view')->name('comunidade.consultar');
    //Cancelar Comunidade
    Route::get('/cancelar', 'ComunidadeController@cancel')->name('comunidade.cancelar');
});

Route::prefix('topico')->group(function ()
{
    //Listar Comunidade
    Route::get('/listar', 'TopicoController@index')->name('topico.listar');
    //Pesquisar Comunidade
    Route::any('/pesquisar', 'TopicoController@search')->name('topico.pesquisar');
    //Incluir Comunidade
    Route::get('/incluir', 'TopicoController@new')->name('topico.incluir');
    Route::post('/salvar', 'TopicoController@create')->name('topico.salvar');
    //Alterar Comunidade
    Route::get('/alterar/{id}', 'TopicoController@update')->name('topico.update');
    Route::post('/update/{id}', 'TopicoController@save')->name('topico.atualizar');
    //Remover Comunidade
    Route::get('/deletar/{id}', 'TopicoController@delete')->name('topico.deletar');
    Route::post('/excluir/{id}', 'TopicoController@excluir')->name('topico.excluir');
    //Consultar Comunidade
    Route::get('/consultar/{id}', 'TopicoController@view')->name('topico.consultar');
    //Cancelar Comunidade
    Route::get('/cancelar', 'TopicoController@cancel')->name('topico.cancelar');
});

//rotas para imagem
Route::get('/imagem/{imagem}', 'ImageController@getImages')->name('imagem.get');
Route::post('/store','ImageController@store')->name('imagem.store');
Route::post('/imagem/excluir','ImageController@excluir')->name('imagem.excluir');


//----------------------------------Rota Principal-----------------------------------
Auth::routes();

//Home
Route::get('/home', 'HomeController@index')->name('home');

