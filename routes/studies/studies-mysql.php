<?php

/*|-------------------------|
  |  Routes studies mysql   |
  |-------------------------|
*/


Route::get('/mysql', [
  'as' => 'studies.mysql.index',
  'uses' => 'MysqlStudiesController@index'
]);


Route::post('/mysql/search', [
  'as' => 'studies.mysql.search',
  'uses' => 'MysqlStudiesController@search'
]);
