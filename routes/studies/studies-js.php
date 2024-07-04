<?php

/*|----------------------|
  |  Routes studies js   |
  |----------------------|
*/


Route::get('/js', [
  'as' => 'studies.js.index',
  'uses' => 'JsStudiesController@index'
]);


Route::post('/js/search', [
  'as' => 'studies.js.search',
  'uses' => 'JsStudiesController@search'
]);
