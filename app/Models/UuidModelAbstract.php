<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class UuidModelAbstract extends Model
{
    use HasUuid;

    protected $uuidColumnName = 'id';

    public $incrementing = false;
    
}
