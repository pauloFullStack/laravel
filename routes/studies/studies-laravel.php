<?php

/*|---------------------------|
  |  Routes studies laravel   |
  |---------------------------|
*/


Route::get('/laravel', [
  'as' => 'studies.laravel.index',
  'uses' => 'LaravelStudiesController@index'
]);


Route::post('/laravel/search', [
  'as' => 'studies.laravel.search',
  'uses' => 'LaravelStudiesController@search'
]);
