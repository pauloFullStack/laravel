<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class SelectAbstract extends Model
{

    protected $fillable = [
        'name',
        'deleted_at',
    ];


    protected $logAttributes = [
        'name',
        'deleted_at',
    ];


    protected $hidden = [];


    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
