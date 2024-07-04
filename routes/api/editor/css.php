<?php

/*
|-------------------------|
|   Rotas editor css      |
|-------------------------|
*/


Route::post('/editor-css-store',[
    'as' => 'api.editor-css.store',
    'uses' => 'CssController@store'
    ]
  );
  
  Route::put('/editor-css-update',[
    'as' => 'api.editor-css.update',
    'uses' => 'CssController@update'
    ]
  );
  
   Route::delete('/editor-css-delete/{id}',[
    'as' => 'api.editor-css.destroy',
    'uses' => 'CssController@destroy'
    ]
  );


