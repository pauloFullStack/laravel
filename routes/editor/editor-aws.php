<?php

/*
|----------------------|
|   Rotas editor aws   |
|----------------------|
*/


Route::post('/aws/api', [
    'uses' => 'AwsEditorController@store'
]);

Route::get('/aws/api', [
    'uses' => 'AwsEditorController@indexAjax'
]);

Route::put('/aws/api', [
    'uses' => 'AwsEditorController@update'
]);

Route::delete('/aws/api/{id}', [
    'uses' => 'AwsEditorController@destroy'
]);

Route::get('/aws', [
    'as' => 'editor.aws.index',
    'uses' => 'AwsEditorController@index'
]);
