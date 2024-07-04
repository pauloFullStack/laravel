<?php

/*
|-----------------------|
|   Rotas editor html   |
|-----------------------|
*/


Route::post('/html/api', [
    'uses' => 'HtmlEditorController@store'
]);

Route::get('/html/api', [
    'uses' => 'HtmlEditorController@indexAjax'
]);

Route::put('/html/api', [
    'uses' => 'HtmlEditorController@update'
]);

Route::delete('/html/api/{id}', [
    'uses' => 'HtmlEditorController@destroy'
]);

Route::get('/html', [
    'as' => 'editor.html.index',
    'uses' => 'HtmlEditorController@index'
]);
