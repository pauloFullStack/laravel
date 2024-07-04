<?php

namespace App\Repositories\Systems\Erp;

use Czim\Repository\ExtendedRepository as Repository;
use App\Repositories\Criteria\ByFieldEqualCriteria;
use App\Repositories\Criteria\ByLikeFieldCriteria;
use App\Models\Systems\Erp\ErpPermissions;
use App\Repositories\Criteria\LimitCriteria;
use App\Repositories\Criteria\SelectCriteria;

class ErpPermissionsRepository extends Repository
{

    public function model()
    {
        return ErpPermissions::class;
    }

    public function findByDataAll()
    {
        return $this->pushCriteriaOnce(new SelectCriteria());
    }

    public function findBySearch($search)
    {
        return $this->pushCriteriaOnce(new ByLikeFieldCriteria('name', $search));
    }

    public function getLimit($maxResults){
        return $this->pushCriteriaOnce(new LimitCriteria($maxResults));
    }

    public function findByData(String $id)
    {

        return $this->pushCriteriaOnce(new SelectCriteria())
            ->pushCriteriaOnce(new ByFieldEqualCriteria('id', $id))
            ->first();
    }
}
