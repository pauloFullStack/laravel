<?php

/*
|----------------------|
|   Rotas editor css   |
|----------------------|
*/


Route::post('/css/api', [
    'uses' => 'CssEditorController@store'
]);

Route::get('/css/api', [
    'uses' => 'CssEditorController@indexAjax'
]);

Route::put('/css/api', [
    'uses' => 'CssEditorController@update'
]);

Route::delete('/css/api/{id}', [
    'uses' => 'CssEditorController@destroy'
]);

Route::get('/css', [
    'as' => 'editor.css.index',
    'uses' => 'CssEditorController@index'
]);
