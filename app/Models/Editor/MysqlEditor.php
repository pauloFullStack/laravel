<?php

namespace App\Models\Editor;

use App\Models\UuidModelAbstract;

class MysqlEditor extends UuidModelAbstract
{

    protected $table = 'mysql_studies';

    protected $fillable = [
        'title',
        'code',
        'position',
        'description'
    ];


    protected $logAttributes = [
        'title',
        'code',
        'position',
        'description'
    ];


    protected $hidden = [];


    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
