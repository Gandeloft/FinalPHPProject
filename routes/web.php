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

Route::get('/documents', 'DocumentController@index')->name('documents');
Route::post('/documents', 'DocumentController@store')->name('documents.store');
Route::get('/countries', 'CountryController@index');
Route::get('/countries/new', 'CountryController@create');
Route::post('/countries', 'CountryController@store');
Route::get('/countries/delete/{id}', 'CountryController@destroy');
Route::get('/cities', 'CityController@index');
Route::get('/cities/new', 'CityController@create');
Route::post('/cities', 'CityController@store');
Route::get('/cities/delete/{id}', 'CityController@destroy');
Route::get('/continents', 'ContinentController@index');
Route::get('/continents/new', 'ContinentController@create');
Route::post('/continents', 'ContinentController@store');
Route::get('/continents/delete/{id}', 'ContinentController@destroy');
Route::get('/municipalities', 'MunicipalityController@index');
Route::get('/municipalities/new', 'MunicipalityController@create');
Route::post('/municipalities', 'MunicipalityController@store');
Route::get('/municipalities/delete/{id}', 'MunicipalityController@destroy');
Route::get('/places', 'PlaceController@index');
Route::get('/places/new', 'PlaceController@create');
Route::post('/places', 'PlaceController@store');
Route::get('/places/delete/{id}', 'PlaceController@destroy');
Route::get('/people', 'PersonController@index');
Route::get('/people/new', 'PersonController@create');
Route::post('/people', 'PersonController@store');
Route::get('/people/delete/{id}', 'PersonController@destroy');