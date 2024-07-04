<?php

/*|-----------------------|
  |  Routes studies ssh   |
  |-----------------------|
*/


Route::get('/ssh', [
  'as' => 'studies.ssh.index',
  'uses' => 'SshStudiesController@index'
]);


Route::post('/ssh/search', [
  'as' => 'studies.ssh.search',
  'uses' => 'SshStudiesController@search'
]);
