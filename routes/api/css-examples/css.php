<?php

/*|------------------------------|
  |     Routes Examples css Api  |
  |------------------------------|
 */

 Route::post('/css-example-store',[
  'as' => 'api.services.store',
  'uses' => 'CssExamplesController@store'
  ]
);

Route::post('/css-example-update',[
  'as' => 'api.css-example.update',
  'uses' => 'CssExamplesController@update'
  ]
);

 Route::delete('/css-example-delete/{id}',[
  'as' => 'api.css-example.destroy',
  'uses' => 'CssExamplesController@destroy'
  ]
);