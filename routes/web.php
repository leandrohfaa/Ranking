<?php

use App\Http\Controllers\clubecontroller;
use App\Http\Controllers\competicaocontroller;
use App\Http\Controllers\paginainicialcontroller;
use App\Http\Controllers\tituloscontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Rotas clube
Route::get('/clubes',[clubecontroller::class,"index"])->name("clube.list");
Route::get('/clubes/create',[clubecontroller::class,"form"])->name("clube.create");
Route::post('/clubes/store',[clubecontroller::class,"store"])->name("clube.form.post");

//Rotas Competição
Route::get('/competicao',[competicaocontroller::class,"index"])->name("competicao.list");
Route::get('/competicao/create',[competicaocontroller::class,"form"])->name("competicao.create");
Route::post('/competicao/store',[competicaocontroller::class,"store"])->name("competicao.form.post");

//Rota Pagina inicial  
Route::get('/index',[paginainicialcontroller::class,"index"])->name("index.list");

//Rota Titulo
Route::get('/titulo',[tituloscontroller::class,"index"])->name("titulo.list");
Route::get('/titulo/create',[tituloscontroller::class,"form"])->name("titulo.create");
Route::post('/titulo/store',[tituloscontroller::class,"store"])->name("titulo.form.post");
