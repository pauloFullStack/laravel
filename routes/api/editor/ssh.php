<?php

/*
|-------------------------|
|   Rotas editor ssh      |
|-------------------------|
*/


Route::post('/editor-ssh-store',[
    'as' => 'api.editor-ssh.store',
    'uses' => 'SshController@store'
    ]
  );
  
  Route::put('/editor-ssh-update',[
    'as' => 'api.editor-ssh.update',
    'uses' => 'SshController@update'
    ]
  );
  
   Route::delete('/editor-ssh-delete/{id}',[
    'as' => 'api.editor-ssh.destroy',
    'uses' => 'SshController@destroy'
    ]
  );


