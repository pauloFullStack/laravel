<?php

/*
|---------------------|
|   Rotas editor js   |
|---------------------|
*/


Route::post('/js/api', [
    'uses' => 'JsEditorController@store'
]);

Route::get('/js/api', [
    'uses' => 'JsEditorController@indexAjax'
]);

Route::put('/js/api', [
    'uses' => 'JsEditorController@update'
]);

Route::delete('/js/api/{id}', [
    'uses' => 'JsEditorController@destroy'
]);

Route::get('/js', [
    'as' => 'editor.js.index',
    'uses' => 'JsEditorController@index'
]);
