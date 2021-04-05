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


Route::get('/usuario/listar', 'UsuarioController@index')->name('usuario.listar');
Route::get('/usuario/cancelar', 'UsuarioController@cancel')->name('usuario.cancelar');
Route::get('/usuario/incluir', 'UsuarioController@new')->name('usuario.incluir');

Route::get('/usuario/alterar/{id}', 'UsuarioController@update')->name('usuario.update');
Route::get('/usuario/excluir/{id}', 'UsuarioController@delete')->name('usuario.delete');
Route::get('/usuario/consultar/{id}', 'UsuarioController@view')->name('usuario.consultar');

Route::post('/usuario/salvar', 'UsuarioController@create')->name('usuario.salvar');
Route::post('/usuario/update/{id}', 'UsuarioController@save')->name('usuario.atualizar');
Route::post('/usuario/excluir/{id}', 'UsuarioController@excluir')->name('usuario.excluir');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');