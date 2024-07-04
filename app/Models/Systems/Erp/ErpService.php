<?php

namespace App\Models\Systems\Erp;

use Illuminate\Database\Eloquent\Model;

class ErpService extends Model
{

    protected $table = 'erp_services';

    protected $fillable = [
        'name_service',
        'valor_service',
        'note_service', 
        'deleted_at',
    ];


    protected $logAttributes = [
        'name_service',
        'valor_service',
        'note_service',
        'deleted_at',
    ];


    protected $hidden = [];


    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
