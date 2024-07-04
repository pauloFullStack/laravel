<?php

/*|-----------------------|
  |  Routes studies aws   |
  |-----------------------|
*/


Route::get('/aws', [
  'as' => 'studies.aws.index',
  'uses' => 'AwsStudiesController@index'
]);


Route::post('/aws/search', [
  'as' => 'studies.aws.search',
  'uses' => 'AwsStudiesController@search'
]);
