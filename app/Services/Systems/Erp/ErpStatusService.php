<?php


namespace App\Services\Systems\Erp;

use App\Repositories\Systems\Erp\StatusServiceRepository;
use App\Services\SelectAbstract;

class ErpStatusService extends SelectAbstract
{
    /**
     * @var StatusServiceRepository
     */
    protected $repository;


    public function __construct(
        StatusServiceRepository $repository
    ) {
        parent::__construct($repository);
        $this->repository = $repository;
    }
}
