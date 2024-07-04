<?php


namespace App\Services\Systems\Erp;

use App\Repositories\Systems\Erp\ErpEmployeeRolesRepository;
use App\Services\SelectAbstract;

class ErpEmployeeRolesService extends SelectAbstract
{
    /**
     * @var ErpEmployeeRolesRepository
     */
    protected $repository;


    public function __construct(
        ErpEmployeeRolesRepository $repository
    ) {
        parent::__construct($repository);
        $this->repository = $repository;
    }
}
