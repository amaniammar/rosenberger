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

Route::get('production', 'ProductionController@index');
Route::get('productions/create', 'ProductionController@create');
Route::post('productions', 'ProductionController@store');
Route::get('productions/{id}/edit', 'ProductionController@edit');
Route::put('productions/{id}', 'ProductionController@update');
Route::delete('productions/{id}', 'ProductionController@destroy'); 

Route::get('/accueil', function () {
    return view('accueil');
});





Route::get('general', 'GeneralController@index');



Route::get('/production', function () {
    return view('production');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
