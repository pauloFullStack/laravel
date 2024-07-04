<?php

namespace App\Models\Systems\Erp;

use App\Models\UuidModelAbstract;

class ErpCustomers extends UuidModelAbstract
{

    protected $table = 'erp_customers';

    protected $fillable = [
        'name',
        'telephone',
        'email',
    ];


    protected $logAttributes = [
        'id',
        'name',
        'telephone',
        'email',
    ];


    protected $hidden = [];


    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
