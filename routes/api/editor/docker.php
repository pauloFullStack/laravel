<?php

/*
|-------------------------|
|   Rotas editor docker   |
|-------------------------|
*/


Route::post('/editor-docker-store',[
    'as' => 'api.editor-docker.store',
    'uses' => 'DockerController@store'
    ]
  );
  
  Route::put('/editor-docker-update',[
    'as' => 'api.editor-docker.update',
    'uses' => 'DockerController@update'
    ]
  );
  
   Route::delete('/editor-docker-delete/{id}',[
    'as' => 'api.editor-docker.destroy',
    'uses' => 'DockerController@destroy'
    ]
  );


