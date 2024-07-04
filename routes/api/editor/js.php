<?php

/*
|-------------------------|
|   Rotas editor js       |
|-------------------------|
*/


Route::post('/editor-js-store',[
    'as' => 'api.editor-js.store',
    'uses' => 'JsController@store'
    ]
  );
  
  Route::put('/editor-js-update',[
    'as' => 'api.editor-js.update',
    'uses' => 'JsController@update'
    ]
  );
  
   Route::delete('/editor-js-delete/{id}',[
    'as' => 'api.editor-js.destroy',
    'uses' => 'JsController@destroy'
    ]
  );


