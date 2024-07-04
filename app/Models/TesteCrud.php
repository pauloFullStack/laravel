<?php

namespace App\Models;



class TesteCrud extends UuidModelAbstract
{

    protected $table = 'teste_crud';

    protected $fillable = [
        'name',
        'telephone',
        'email',
        'gender'
    ];


    protected $logAttributes = [
        'name',
        'telephone',
        'email',
        'gender'
    ];


    protected $hidden = [];


    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
