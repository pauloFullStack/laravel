<?php

/*|--------------------------|
  |  Routes studies docker   |
  |--------------------------|
*/


Route::get('/docker', [
  'as' => 'studies.docker.index',
  'uses' => 'DockerStudiesController@index'
]);


Route::post('/docker/search', [
  'as' => 'studies.docker.search',
  'uses' => 'DockerStudiesController@search'
]);
