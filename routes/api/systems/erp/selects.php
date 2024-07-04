<?php

    // Rotas GET
    Route::get('/erp/select/services',[
        'as' => 'api.search.for.autocomplete.service',
        'uses' => 'SelectController@searchForAutocompleteService'
        ]
    );

    Route::get('/erp/select/status-service',[
        'as' => 'api.search.for.autocomplete.service.status',
        'uses' => 'SelectController@searchForAutocompleteStatusService'
        ]
    );

    Route::get('/erp/select/status-payment',[
        'as' => 'api.search.for.autocomplete.payment.status',
        'uses' => 'SelectController@searchForAutocompleteStatusPayment'
        ]
    );

    Route::get('/erp/select/employee-roles',[
        'as' => 'api.search.for.autocomplete.employee-roles',
        'uses' => 'SelectController@searchForAutocompleteEmployeeRoles'
        ]
    );

    Route::get('/erp/select/permissions',[
        'as' => 'api.search.for.autocomplete.permissions',
        'uses' => 'SelectController@searchForAutocompletePermissions'
        ]
    );

    Route::get('/erp/select/users',[
        'as' => 'api.search.for.autocomplete.users',
        'uses' => 'SelectController@searchForAutocompleteUsers'
        ]
    );

    //Rotas POST

    Route::post('/erp/select/employee-roles-store',[
        'as' => 'api.employee-roles-store',
        'uses' => 'SelectController@storeEmployeeRoles'
        ]
    );

    //Rotas PUT

    Route::put('/erp/select/employee-roles-update',[
        'as' => 'api.employee-roles-update',
        'uses' => 'SelectController@updateEmployeeRoles'
        ]
    );


    //Rotas DELETE

    Route::delete('/erp/select/employee-roles-destroy/{id}',[
        'as' => 'api.employee-roles-destroy',
        'uses' => 'SelectController@destroyEmployeeRoles'
        ]
    );