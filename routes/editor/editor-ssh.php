<?php

/*
|-----------------------|
|   Rotas editor ssh    |
|-----------------------|
*/


Route::post('/ssh/api', [
    'uses' => 'SshEditorController@store'
]);

Route::get('/ssh/api', [
    'uses' => 'SshEditorController@indexAjax'
]);

Route::put('/ssh/api', [
    'uses' => 'SshEditorController@update'
]);

Route::delete('/ssh/api/{id}', [
    'uses' => 'SshEditorController@destroy'
]);

Route::get('/ssh', [
    'as' => 'editor.ssh.index',
    'uses' => 'SshEditorController@index'
]);
