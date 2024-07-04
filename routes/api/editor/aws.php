<?php

/*
|-------------------------|
|   Rotas editor aws      |
|-------------------------|
*/


Route::post('/editor-aws-store',[
    'as' => 'api.editor-aws.store',
    'uses' => 'AwsController@store'
    ]
  );
  
  Route::put('/editor-aws-update',[
    'as' => 'api.editor-aws.update',
    'uses' => 'AwsController@update'
    ]
  );
  
   Route::delete('/editor-aws-delete/{id}',[
    'as' => 'api.editor-aws.destroy',
    'uses' => 'AwsController@destroy'
    ]
  );


