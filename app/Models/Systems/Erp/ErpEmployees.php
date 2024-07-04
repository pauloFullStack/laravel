<?php

namespace App\Models\Systems\Erp;

use App\Models\User;
use App\Models\UuidModelAbstract;

class ErpEmployees extends UuidModelAbstract
{

    protected $table = 'employees';

    protected $fillable = [
        'user_key',
        'telephone',
        'permissions',
        'street',
        'number',
        'district',
        'city',
        'state',
        'employee_roles_id',
        'cpf',
        'bill',
        'agency',
        'operation',
    ];


    protected $logAttributes = [
        'user_key',
        'telephone',
        'permissions',
        'street',
        'number',
        'district',
        'city',
        'state',
        'employee_roles_id',
        'cpf',
        'bill',
        'agency',
        'operation',
    ];

    protected $casts = [
        'permissions' => 'array'
    ];

    protected $hidden = [];


    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employeeRoles()
    {
        return $this->belongsTo(EmployeeRoles::class, 'employee_roles_id', 'id', 'employeeRoles');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userKey()
    {
        return $this->belongsTo(User::class, 'user_key', 'id', 'userKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function responsible()
    {
        return $this->belongsTo(ErpCustomersServices::class, 'user_key', 'responsible_collaborator', 'responsible');
    }
}
