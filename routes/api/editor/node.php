<?php

/*
|-------------------------|
|   Rotas editor node     |
|-------------------------|
*/


Route::post('/editor-node-store',[
    'as' => 'api.editor-node.store',
    'uses' => 'NodeController@store'
    ]
  );
  
  Route::put('/editor-node-update',[
    'as' => 'api.editor-node.update',
    'uses' => 'NodeController@update'
    ]
  );
  
   Route::delete('/editor-node-delete/{id}',[
    'as' => 'api.editor-node.destroy',
    'uses' => 'NodeController@destroy'
    ]
  );


