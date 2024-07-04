<?php

/*|-----------------------|
  |     Routes ERP        |
  |-----------------------|
 */

Route::group(['middleware' => 'auth', 'namespace' => 'Systems\Erp'], function () {
    Route::group(['prefix' => '/systems/erp'], function () {
        Route::get('/', [
            'as' => 'systems.erp.index',
            'uses' => 'ErpController@index'
        ]);

        Route::get('/customers', [
            'as' => 'systems.erp.customers',
            'uses' => 'ErpCustomersController@index'
        ])->middleware('user.permissions');

        Route::get('/services', [
            'as' => 'systems.erp.services',
            'uses' => 'ErpServicesController@index'
        ])->middleware('user.permissions');

        Route::get('/finance', [
            'as' => 'systems.erp.finance',
            'uses' => 'ErpFinanceController@index'
        ]);

        Route::get('/all-works', [
            'as' => 'systems.erp.all-works',
            'uses' => 'ErpScheduleController@index'
        ])->middleware('user.permissions');

        Route::get('/my-works', [
            'as' => 'systems.erp.my-works',
            'uses' => 'ErpProvidersController@index'
        ])->middleware('user.permissions');

        Route::get('/employees', [
            'as' => 'systems.erp.employees',
            'uses' => 'ErpEmployeesController@index'
        ])->middleware('user.permissions');

        Route::get('/stock', [
            'as' => 'systems.erp.stock',
            'uses' => 'ErpStockController@index'
        ]);
    });

    //rotas anexadas

    Route::group(['prefix' => '/erp'], function () {
        //Customers
        require __DIR__ . '/customers.php';

        //Services
        require __DIR__ . '/services.php';
    });
});
