<?php

    //Post
    Route::post('/systems/erp/employee-store',[
        'as' => 'api.employee.store',
        'uses' => 'EmployeesController@store'
        ]
    );

    //Update
    Route::put('/systems/erp/employee-update-basic',[
        'as' => 'api.employee.update-basic',
        'uses' => 'EmployeesController@updateBasic'
        ]
    );

    Route::put('/systems/erp/employee-update-address',[
        'as' => 'api.employee.update-address',
        'uses' => 'EmployeesController@updateAddress'
        ]
    );

    Route::put('/systems/erp/employee-update-bank',[
        'as' => 'api.employee.update-bank',
        'uses' => 'EmployeesController@updateBank'
        ]
    );

    //Destroy
    Route::delete('/systems/erp/employee-destroy/{id}',[
        'as' => 'api.employee.destroy',
        'uses' => 'EmployeesController@destroy'
        ]
    );

