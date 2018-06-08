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
    return view('welcome');
});

Route::get('/pelada', function (){
    return view('pelada');
});
Auth::routes();

Route::get('/home', ['as'=>'home','uses' => 'HomeController@index']);
Route::post('/salvar',['as'=>'salvar', 'uses' => 'HomeController@salvar']);
Route::get('/novocadastro', ['uses'=>'HomeController@novoCadastro']);
Route::get('/editar/{id}', ['as'=>'editar', 'uses' => 'HomeController@editar']);
Route::put('/atualizar/{id}', ['as' =>'atualizar', 'uses' => 'HomeController@atualizar']);
Route::get('/deletar/{id}', ['as' => 'deletar', 'uses' => 'HomeController@deletar']);