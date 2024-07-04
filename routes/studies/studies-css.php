<?php

/*|-----------------------|
  |  Routes studies css   |
  |-----------------------|
*/


Route::get('/css', [
  'as' => 'studies.css.index',
  'uses' => 'CssStudiesController@index'
]);


Route::post('/css/search', [
  'as' => 'studies.css.search',
  'uses' => 'CssStudiesController@search'
]);
