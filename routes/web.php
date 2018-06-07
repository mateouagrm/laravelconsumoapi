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

/*Route::get('/', function () {
    return view('welcome');
});*/

//usuario
Route::get('uber','PrincipalController@index');
Route::get('registrarestudiante','UsuarioController@clienteget');
Route::get('listaestudiante','UsuarioController@listaestudiantes');
Route::get('listachofer','UsuarioController@listachoferes');
Route::get('registrarruta','UsuarioController@getregistrarrutas');
Route::post('estudiante', ['as' =>'estudiante', 'uses' => 'UsuarioController@estudianteregistrar']);
Route::post('ruta', ['as' =>'ruta', 'uses' => 'UsuarioController@rutaregistrar']);

// login

Route::get('/', ['as' => 'auth/login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);



