<?php


namespace App\Services\Systems\Erp;

use App\Repositories\Systems\Erp\ErpPermissionsRepository;
use App\Services\SelectAbstract;

class ErpPermissionsService extends SelectAbstract
{
    /**
     * @var ErpPermissionsRepository
     */
    protected $repository;


    public function __construct(
        ErpPermissionsRepository $repository
    ) {
        parent::__construct($repository);
        $this->repository = $repository;
    }
}
