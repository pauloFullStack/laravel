<?php

namespace App\Models\Editor;

use App\Models\UuidModelAbstract;

class LaravelEditor extends UuidModelAbstract
{

    protected $table = 'laravel_studies';

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
