<?php

/*
|-------------------------|
|   Rotas editor ubuntu   |
|-------------------------|
*/


Route::post('/editor-ubuntu-store',[
    'as' => 'api.editor-ubuntu.store',
    'uses' => 'UbuntuController@store'
    ]
  );
  
  Route::put('/editor-ubuntu-update',[
    'as' => 'api.editor-ubuntu.update',
    'uses' => 'UbuntuController@update'
    ]
  );
  
   Route::delete('/editor-ubuntu-delete/{id}',[
    'as' => 'api.editor-ubuntu.destroy',
    'uses' => 'UbuntuController@destroy'
    ]
  );


