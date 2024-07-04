<?php

/*|--------------------------------|
  |     Routes portfolio advocacy  |
  |--------------------------------|
 */

Route::group(['namespace' => 'Portfolios'], function () {


  Route::get('/site-phpgold/portfolios/{folderTemplate}/{templateId}', [
    'as' => 'site-phpgold.portfolios.template.id.index',
    'uses' => 'PortfoliosController@index'
  ]);
});
