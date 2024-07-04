<?php

    Route::post('/systems/erp/customer-service-store',[
        'as' => 'api.customer.store',
        'uses' => 'CustomerServiceController@storeCustomerService'
        ]
    );

    Route::put('/systems/erp/customer-service-update',[
        'as' => 'api.customer.update',
        'uses' => 'CustomerServiceController@updateCustomerService'
        ]
    );

    Route::get('/systems/erp/check-services-customer/{id}',[
        'as' => 'api.check-services-customer',
        'uses' => 'CustomerServiceController@checkServicesCustomer'
        ]
    );

    Route::get('/systems/erp/check-services-responsible-collaborator/{id}',[
        'as' => 'api.check-services-responsible-collaborator',
        'uses' => 'CustomerServiceController@checkServicesResponsibleCollaborator'
        ]
    );

    Route::delete('/systems/erp/customer-service-destroy/{id}',[
        'as' => 'api.customer.destroy',
        'uses' => 'CustomerServiceController@destroyCustomerService'
        ]
    );

    Route::get('/filter-customer-service/{paymentStatus}/{serviceStatus}/{serviceType}/{idCustomer}',[
        'as' => 'api.customer.destroy',
        'uses' => 'CustomerServiceController@filterCustomerService'
        ]
    );

    //Update my works status
    Route::put('/systems/erp/my-works-status',[
        'as' => 'api.employee.update-my-works-status',
        'uses' => 'CustomerServiceController@myWorksStatusUpdate'
        ]
    );