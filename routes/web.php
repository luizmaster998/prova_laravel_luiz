<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});




Route::get('/admin/certidao', 'Admin\CertidaoController@index')
->name('admin.certidao');
Route::get('/admin/certidao/adicionar', 'Admin\CertidaoController@adicionar')
->name('admin.certidao.adicionar');
Route::post('/admin/certidao/salvar', 'Admin\CertidaoController@salvar')
->name('admin.certidao.salvar');
Route::get('admin/certidao/editar/{id}', 'Admin\CertidaoController@editar')
->name('admin.certidao.editar');
Route::put('admin/certidao/atualizar/{id}', 'Admin\CertidaoController@atualizar')
->name('admin.certidao.atualizar');
Route::delete('/admin/certidao/deletar/{id}', 'Admin\CertidaoController@deletar')
->name('admin.certidao.deletar');

Route::get('/admin/contrato', 'Admin\ContratoController@index')
->name('admin.contrato');
Route::get('/admin/contrato/adicionar', 'Admin\ContratoController@adicionar')
->name('admin.contrato.adicionar');
Route::post('/admin/contrato/salvar', 'Admin\ContratoController@salvar')
->name('admin.contrato.salvar');
Route::get('admin/contrato/editar/{id}', 'Admin\ContratoController@editar')
->name('admin.contrato.editar');
Route::put('admin/contrato/atualizar/{id}', 'Admin\ContratoController@atualizar')
->name('admin.contrato.atualizar');
Route::delete('/admin/contrato/deletar/{id}', 'Admin\ContratoController@deletar')
->name('admin.contrato.deletar');


Route::get('/admin/tabeliao', 'Admin\TabeliaoController@index')
->name('admin.tabeliao');
Route::get('/admin/tabeliao/adicionar', 'Admin\TabeliaoController@adicionar')
->name('admin.tabeliao.adicionar');
Route::post('/admin/tabeliao/salvar', 'Admin\TabeliaoController@salvar')
->name('admin.tabeliao.salvar');
Route::get('admin/tabeliao/editar/{id}', 'Admin\TabeliaoController@editar')
->name('admin.tabeliao.editar');
Route::put('admin/tabeliao/atualizar/{id}', 'Admin\TabeliaoController@atualizar')
->name('admin.tabeliao.atualizar');
Route::delete('/admin/tabeliao/deletar/{id}', 'Admin\TabeliaoController@deletar')
->name('admin.tabeliao.deletar');
