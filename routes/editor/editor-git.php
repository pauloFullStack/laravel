<?php

/*
|----------------------|
|   Rotas editor git   |
|----------------------|
*/


Route::post('/git/api', [
    'uses' => 'GitEditorController@store'
]);

Route::get('/git/api', [
    'uses' => 'GitEditorController@indexAjax'
]);

Route::put('/git/api', [
    'uses' => 'GitEditorController@update'
]);

Route::delete('/git/api/{id}', [
    'uses' => 'GitEditorController@destroy'
]);

Route::get('/git', [
    'as' => 'editor.git.index',
    'uses' => 'GitEditorController@index'
]);
