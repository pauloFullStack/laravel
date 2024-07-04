<?php

/*|--------------------------|
  |  Routes studies ubuntu   |
  |--------------------------|
*/


Route::get('/ubuntu', [
  'as' => 'studies.ubuntu.index',
  'uses' => 'UbuntuStudiesController@index'
]);


Route::post('/ubuntu/search', [
  'as' => 'studies.ubuntu.search',
  'uses' => 'UbuntuStudiesController@search'
]);
