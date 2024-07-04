<?php

namespace App\Models\CssExamples;

use App\Models\UuidModelAbstract;

class CssExamples extends UuidModelAbstract
{

    protected $table = 'examples_css';

    protected $fillable = [
        'title',
        'position',
        'image',
        'code_image'
    ];


    protected $logAttributes = [
        'title',
        'position',
        'image',
        'code_image'
    ];


    protected $hidden = [];


    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
