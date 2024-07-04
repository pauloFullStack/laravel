<?php

/*
|-------------------------|
|   Rotas editor docker   |
|-------------------------|
*/


Route::post('/docker/api', [
    'uses' => 'DockerEditorController@store'
]);

Route::get('/docker/api', [
    'uses' => 'DockerEditorController@indexAjax'
]);

Route::put('/docker/api', [
    'uses' => 'DockerEditorController@update'
]);

Route::delete('/docker/api/{id}', [
    'uses' => 'DockerEditorController@destroy'
]);

Route::get('/docker', [
    'as' => 'editor.docker.index',
    'uses' => 'DockerEditorController@index'
]);
