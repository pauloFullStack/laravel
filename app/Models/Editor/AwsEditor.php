<?php

namespace App\Models\Editor;

use App\Models\UuidModelAbstract;

class AwsEditor extends UuidModelAbstract
{

    protected $table = 'aws_studies';

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
