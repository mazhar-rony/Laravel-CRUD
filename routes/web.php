<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/countries', 'CountriesController@showAllCountries');

Route::get('/countries/create', 'CountriesController@create');

Route::post('/countries/create', 'CountriesController@store');

Route::get('/countries/{id}', 'CountriesController@showCountryDetail');

//Normal Approach
Route::get('/countries/{id}/edit', 'CountriesController@edit');

//Route Model Binding
//Route::get('/countries/{country}/edit', 'CountriesController@edit');

Route::patch('/countries/{id}/edit', 'CountriesController@update');

Route::delete('/countries/{id}/delete', 'CountriesController@destroy');
