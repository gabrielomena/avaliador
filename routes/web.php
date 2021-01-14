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

Route::get('/','ProfileController@index')->name('home');
Route::post('/candidatos/novo', 'ProfileController@novo')->name('candidatos.novo');
Route::get('/candidatos/adiciona', 'ProfileController@adiciona')->name('adiciona');

Auth::routes();

//Avaliação
Route::middleware(['auth'])->group(function () {
    Route::redirect('/home', '/avaliacao'); // Gambiarra
    Route::get('/avaliacao', 'ProfileController@candidatos');
    Route::get('/avaliacao/avaliar/{id}', 'ProfileController@avaliar')->where('id','[0-9]+');
});
