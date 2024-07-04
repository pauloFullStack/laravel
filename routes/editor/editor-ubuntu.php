<?php

/*
|-------------------------|
|   Rotas editor ubuntu   |
|-------------------------|
*/


Route::post('/ubuntu/api', [
    'uses' => 'UbuntuEditorController@store'
]);

Route::get('/ubuntu/api', [
    'uses' => 'UbuntuEditorController@indexAjax'
]);

Route::put('/ubuntu/api', [
    'uses' => 'UbuntuEditorController@update'
]);

Route::delete('/ubuntu/api/{id}', [
    'uses' => 'UbuntuEditorController@destroy'
]);

Route::get('/ubuntu', [
    'as' => 'editor.ubuntu.index',
    'uses' => 'UbuntuEditorController@index'
]);
