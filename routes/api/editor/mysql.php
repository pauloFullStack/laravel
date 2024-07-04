<?php

/*
|-------------------------|
|   Rotas editor mysql    |
|-------------------------|
*/


Route::post('/editor-mysql-store',[
    'as' => 'api.editor-mysql.store',
    'uses' => 'MysqlController@store'
    ]
  );
  
  Route::put('/editor-mysql-update',[
    'as' => 'api.editor-mysql.update',
    'uses' => 'MysqlController@update'
    ]
  );
  
   Route::delete('/editor-mysql-delete/{id}',[
    'as' => 'api.editor-mysql.destroy',
    'uses' => 'MysqlController@destroy'
    ]
  );


