<?php

/*
|----------------------|
|   Rotas editor php   |
|----------------------|
*/


Route::post('/php/api', [
    'uses' => 'PhpEditorController@store'
]);

Route::get('/php/api', [
    'uses' => 'PhpEditorController@indexAjax'
]);

Route::put('/php/api', [
    'uses' => 'PhpEditorController@update'
]);

Route::delete('/php/api/{id}', [
    'uses' => 'PhpEditorController@destroy'
]);

Route::get('/php', [
    'as' => 'editor.php.index',
    'uses' => 'PhpEditorController@index'
]);
