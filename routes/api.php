<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//rotas certidao
Route::get('/listar', 'Api\CertidaoController@listar');
Route::post('/salvar', 'Api\CertidaoController@salvar');
Route::get('/buscar/{id}', 'Api\CertidaoController@buscar');
Route::put('/atualizar/{id}', 'Api\CertidaoController@atualizar');
Route::delete('/deletar/{id}', 'Api\CertidaoController@deletar');

Route::get('/listar', 'Api\ContratoController@listar');
Route::post('/salvar', 'Api\ContratoController@salvar');
Route::get('/buscar/{id}', 'Api\ContratooController@buscar');
Route::put('/atualizar/{id}', 'Api\ContratoController@atualizar');
Route::delete('/deletar/{id}', 'Api\ContratoController@deletar');

Route::get('/listar', 'Api\TabeliaoController@listar');
Route::post('/salvar', 'Api\TabeliaoController@salvar');
Route::get('/buscar/{id}', 'Api\TabeliaoController@buscar');
Route::put('/atualizar/{id}', 'Api\TabeliaoController@atualizar');
Route::delete('/deletar/{id}', 'Api\TabeliaoController@deletar');
