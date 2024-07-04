<?php

namespace App\Models\Systems\Erp;

use App\Models\User;
use App\Models\UuidModelAbstract;

class ErpCustomersServices extends UuidModelAbstract
{

    protected $table = 'erp_customers_services';

    protected $fillable = [
        'services_id',
        'customers_id',
        'valor_service',
        'responsible_collaborator',
        'work_status',
        'status_service_id',
        'payment_status_id',
        'service_delivery_date',
        'payment_date',
    ];


    protected $logAttributes = [
        'id',
        'services_id',
        'customers_id',
        'valor_service',
        'responsible_collaborator',
        'work_status',
        'status_service_id',
        'payment_status_id',
        'service_delivery_date',
        'payment_date',
    ];


    protected $hidden = [];


    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'service_delivery_date',
        'payment_date',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service()
    {

        return $this->belongsTo(ErpService::class, 'services_id', 'id', 'service');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {

        return $this->belongsTo(ErpCustomers::class, 'customers_id', 'id', 'customer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paymentStatus()
    {

        return $this->belongsTo(PaymentStatus::class, 'payment_status_id', 'id', 'paymentStatus');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusService()
    {

        return $this->belongsTo(StatusService::class, 'status_service_id', 'id', 'statusService');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function responsible()
    {

        return $this->belongsTo(User::class, 'responsible_collaborator', 'id', 'responsible');
    }

}
