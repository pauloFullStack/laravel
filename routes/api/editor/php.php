<?php

/*
|-------------------------|
|   Rotas editor php      |
|-------------------------|
*/


Route::post('/editor-php-store',[
    'as' => 'api.editor-php.store',
    'uses' => 'PhpController@store'
    ]
  );
  
  Route::put('/editor-php-update',[
    'as' => 'api.editor-php.update',
    'uses' => 'PhpController@update'
    ]
  );
  
   Route::delete('/editor-php-delete/{id}',[
    'as' => 'api.editor-php.destroy',
    'uses' => 'PhpController@destroy'
    ]
  );


