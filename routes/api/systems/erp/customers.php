<?php

    Route::post('/systems/erp/customer-store',[
        'as' => 'api.customer.store',
        'uses' => 'CustomerController@storeCustomer'
        ]
    );

    Route::put('/systems/erp/customer-update',[
        'as' => 'api.customer.update',
        'uses' => 'CustomerController@updateCustomer'
        ]
    );

    Route::delete('/systems/erp/customer-destroy/{id}',[
        'as' => 'api.customer.destroy',
        'uses' => 'CustomerController@destroyCustomer'
        ]
    );

