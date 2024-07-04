<?php

namespace App\Repositories\Systems\Erp;

use Czim\Repository\ExtendedRepository as Repository;
use App\Models\Systems\Erp\ErpCustomers;
use App\Repositories\Criteria\ByFieldEqualCriteria;
use App\Repositories\Criteria\SelectCriteria;
use App\Repositories\Criteria\OrderByCriteria;
use Symfony\Component\CssSelector\Node\SelectorNode;

class ErpCustomersRepository extends Repository
{

    public function model()
    {
        return ErpCustomers::class;
    }

    public function findByData(String $id)
    {

        return $this->pushCriteriaOnce(new SelectCriteria())
            ->pushCriteriaOnce(new ByFieldEqualCriteria('id', $id))
            ->first();
    }

    public function findByDataAll()
    {
        return $this->pushCriteriaOnce(new SelectCriteria())
        ->pushCriteriaOnce(new OrderByCriteria('created_at', 'DESC'));
    }

}
