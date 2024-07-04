<?php

/*|---------------------------|
  |     Routes Erp Customers  |
  |---------------------------|
 */

Route::group(['prefix' => '/customers'], function () {

  Route::post('/', [
    'uses' => 'ErpCustomersController@store'
  ]);

  Route::get('/{id}', [
    'as' => 'system.erp.customer.index',
    'uses' => 'ErpCustomersController@customer'
  ]);

});
