<?php


namespace App\Services\Systems\Erp;

use App\Repositories\Systems\Erp\PaymentStatusRepository;
use App\Services\SelectAbstract;

class ErpStatusPayment extends SelectAbstract
{
    /**
     * @var PaymentStatusRepository
     */
    protected $repository;


    public function __construct(
        PaymentStatusRepository $repository
    ) {
        parent::__construct($repository);
        $this->repository = $repository;
    }
}
