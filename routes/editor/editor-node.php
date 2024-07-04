<?php

/*
|-----------------------|
|   Rotas editor node   |
|-----------------------|
*/


Route::post('/node/api', [
    'uses' => 'NodeEditorController@store'
]);

Route::get('/node/api', [
    'uses' => 'NodeEditorController@indexAjax'
]);

Route::put('/node/api', [
    'uses' => 'NodeEditorController@update'
]);

Route::delete('/node/api/{id}', [
    'uses' => 'NodeEditorController@destroy'
]);

Route::get('/node', [
    'as' => 'editor.node.index',
    'uses' => 'NodeEditorController@index'
]);
