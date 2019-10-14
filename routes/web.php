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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('servicos', 'ServicosController');

Route::resource('clientes', 'ClientesController');

Route::resource('clientes', 'ClientesController');

Route::resource('clientes', 'ClientesController');

Route::resource('clientes', 'ClientesController');

Route::resource('servicos', 'ServicosController');

Route::resource('servicos', 'ServicosController');

Route::resource('empresas', 'EmpresasController');

Route::resource('funcionarios', 'FuncionariosController');

Route::resource('cargosses', 'CargossController');

Route::resource('engenheiros', 'EngenheirosController');

Route::resource('unidades', 'UnidadesController');

Route::resource('bancos', 'BancosController');

Route::resource('contas', 'ContasController');

Route::resource('carteiras', 'CarteirasController');

Route::resource('tipos', 'TiposController');