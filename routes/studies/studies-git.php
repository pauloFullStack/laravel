<?php

/*|-----------------------|
  |  Routes studies git   |
  |-----------------------|
*/


Route::get('/git', [
  'as' => 'studies.git.index',
  'uses' => 'GitStudiesController@index'
]);


Route::post('/git/search', [
  'as' => 'studies.git.search',
  'uses' => 'GitStudiesController@search'
]);
