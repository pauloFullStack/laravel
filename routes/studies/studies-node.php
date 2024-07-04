<?php

/*|------------------------|
  |  Routes studies node   |
  |------------------------|
*/


Route::get('/node', [
  'as' => 'studies.node.index',
  'uses' => 'NodeStudiesController@index'
]);


Route::post('/node/search', [
  'as' => 'studies.node.search',
  'uses' => 'NodeStudiesController@search'
]);
