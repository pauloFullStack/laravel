<?php

/*|---------------------------|
  |     Routes Erp Customers  |
  |---------------------------|
 */

Route::group(['prefix' => '/css-examples', 'namespace' => 'CssExamples'], function () {

  Route::get('/list', [
    'as' => 'css-examples.list',
    'uses' => 'CssExamplesController@index'
  ]);

  Route::get('/show/{id}', [
    'as' => 'css-examples.show',
    'uses' => 'CssExamplesController@show'
  ]);

  Route::get('/edit', [
    'as' => 'css-examples.edit',
    'uses' => 'CssExamplesController@edit'
  ]);

  Route::post('/search', [
    'as' => 'css-examples.search',
    'uses' => 'CssExamplesController@search'
  ]);

});
