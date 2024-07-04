<?php

namespace App\Repositories;

use Czim\Repository\ExtendedRepository as Repository;
use App\Models\TesteCrud;
use App\Repositories\Criteria\ByFieldEqualCriteria;
use App\Repositories\Criteria\SelectCriteria;
use Symfony\Component\CssSelector\Node\SelectorNode;

class TesteRepository extends Repository
{

    public function model()
    {
        return TesteCrud::class;
    }

    public function findByData(String $id)
    {

        return $this->pushCriteriaOnce(new SelectCriteria())
            ->pushCriteriaOnce(new ByFieldEqualCriteria('id', $id))
            ->first();
    }

    public function findByDataAll()
    {
        return $this->pushCriteriaOnce(new SelectCriteria());
    }
}
