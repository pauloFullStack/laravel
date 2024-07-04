<?php

/*|-----------------------|
  |  Routes studies php   |
  |-----------------------|
*/


Route::get('/php', [
  'as' => 'studies.php.index',
  'uses' => 'PhpStudiesController@index'
]);

Route::post('/php/search', [
  'as' => 'studies.php.search',
  'uses' => 'PhpStudiesController@search'
]);
