<?php

/*
|-------------------------|
|   Rotas editor git      |
|-------------------------|
*/


Route::post('/editor-git-store',[
    'as' => 'api.editor-git.store',
    'uses' => 'GitController@store'
    ]
  );
  
  Route::put('/editor-git-update',[
    'as' => 'api.editor-git.update',
    'uses' => 'GitController@update'
    ]
  );
  
   Route::delete('/editor-git-delete/{id}',[
    'as' => 'api.editor-git.destroy',
    'uses' => 'GitController@destroy'
    ]
  );


