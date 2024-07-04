<?php

namespace App\Repositories;

use Czim\Repository\ExtendedRepository as Repository;
use App\Models\User;
use App\Repositories\Criteria\ByFieldEqualCriteria;
use App\Repositories\Criteria\ByLikeFieldCriteria;
use App\Repositories\Criteria\LimitCriteria;
use App\Repositories\Criteria\OrderByCriteria;
use App\Repositories\Criteria\SelectCriteria;

class UsersRepository extends Repository
{

    public function model()
    {
        return User::class;
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
        ->pushCriteriaOnce(new OrderByCriteria('created_at', 'DESC'));;
    }

    public function findBySearch($search)
    {
        return $this->pushCriteriaOnce(new ByLikeFieldCriteria('name', $search));
    }

    public function getLimit($maxResults){
        return $this->pushCriteriaOnce(new LimitCriteria($maxResults));
    }
}
