<?php

/*|------------------------|
  |  Routes studies html   |
  |------------------------|
*/


Route::get('/html', [
  'as' => 'studies.html.index',
  'uses' => 'HtmlStudiesController@index'
]);


Route::post('/html/search', [
  'as' => 'studies.html.search',
  'uses' => 'HtmlStudiesController@search'
]);

