<?php

namespace App\Repositories\Systems\Erp;

use Czim\Repository\ExtendedRepository as Repository;
use App\Models\Systems\Erp\ErpService;
use App\Repositories\Criteria\ByFieldEqualCriteria;
use App\Repositories\Criteria\ByFieldNullCriteria;
use App\Repositories\Criteria\ByLikeFieldCriteria;
use App\Repositories\Criteria\LimitCriteria;
use App\Repositories\Criteria\OrderByCriteria;
use App\Repositories\Criteria\SelectCriteria;
use Symfony\Component\CssSelector\Node\SelectorNode;

class ErpServiceRepository extends Repository
{

    public function model()
    {
        return ErpService::class;
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
        ->pushCriteriaOnce(new ByFieldNullCriteria('deleted_at'))
        ->pushCriteriaOnce(new OrderByCriteria('created_at', 'DESC'));
    }

    public function findBySearch($search)
    {
        return $this->pushCriteriaOnce(new ByLikeFieldCriteria('name_service', $search));
    }

    public function getLimit($maxResults){
        return $this->pushCriteriaOnce(new LimitCriteria($maxResults));
    }
}
