<?php

/*
|------------------------|
|   Rotas editor mysql   |
|------------------------|
*/


Route::post('/mysql/api', [
    'uses' => 'MysqlEditorController@store'
]);

Route::get('/mysql/api', [
    'uses' => 'MysqlEditorController@indexAjax'
]);

Route::put('/mysql/api', [
    'uses' => 'MysqlEditorController@update'
]);

Route::delete('/mysql/api/{id}', [
    'uses' => 'MysqlEditorController@destroy'
]);

Route::get('/mysql', [
    'as' => 'editor.mysql.index',
    'uses' => 'MysqlEditorController@index'
]);
