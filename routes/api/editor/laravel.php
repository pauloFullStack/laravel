<?php

/*
|-------------------------|
|   Rotas editor laravel  |
|-------------------------|
*/


Route::post('/editor-laravel-store',[
    'as' => 'api.editor-laravel.store',
    'uses' => 'LaravelController@store'
    ]
  );
  
  Route::put('/editor-laravel-update',[
    'as' => 'api.editor-laravel.update',
    'uses' => 'LaravelController@update'
    ]
  );
  
   Route::delete('/editor-laravel-delete/{id}',[
    'as' => 'api.editor-laravel.destroy',
    'uses' => 'LaravelController@destroy'
    ]
  );


