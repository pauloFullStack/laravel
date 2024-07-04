<?php

/*
|-------------------------|
|   Rotas editor laravel  |
|-------------------------|
*/


Route::post('/laravel/api', [
    'uses' => 'LaravelEditorController@store'
]);

Route::get('/laravel/api', [
    'uses' => 'LaravelEditorController@indexAjax'
]);

Route::put('/laravel/api', [
    'uses' => 'LaravelEditorController@update'
]);

Route::delete('/laravel/api/{id}', [
    'uses' => 'LaravelEditorController@destroy'
]);

Route::get('/laravel', [
    'as' => 'editor.laravel.index',
    'uses' => 'LaravelEditorController@index'
]);


