<?php

    Route::post('/systems/erp/services-store',[
        'as' => 'api.services.store',
        'uses' => 'ServicesController@storeService'
        ]
    );

    Route::put('/systems/erp/services-update',[
        'as' => 'api.services.update',
        'uses' => 'ServicesController@updateService'
        ]
    );

    Route::delete('/systems/erp/services-destroy/{id}',[
        'as' => 'api.services.destroy',
        'uses' => 'ServicesController@destroyService'
        ]
    );

