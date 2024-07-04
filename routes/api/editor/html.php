<?php

/*
|-------------------------|
|   Rotas editor html     |
|-------------------------|
*/


Route::post('/editor-html-store',[
    'as' => 'api.editor-html.store',
    'uses' => 'HtmlController@store'
    ]
  );
  
  Route::put('/editor-html-update',[
    'as' => 'api.editor-html.update',
    'uses' => 'HtmlController@update'
    ]
  );
  
   Route::delete('/editor-html-delete/{id}',[
    'as' => 'api.editor-html.destroy',
    'uses' => 'HtmlController@destroy'
    ]
  );


