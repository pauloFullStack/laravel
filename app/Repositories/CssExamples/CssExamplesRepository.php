<?php

namespace App\Repositories\CssExamples;

use Czim\Repository\ExtendedRepository as Repository;
use App\Models\CssExamples\CssExamples;
use App\Repositories\Criteria\ByFieldEqualCriteria;
use App\Repositories\Criteria\ByLikeFieldCriteria;
use App\Repositories\Criteria\OrderByCriteria;
use App\Repositories\Criteria\SelectCriteria;

//Criar a model
class CssExamplesRepository extends Repository
{

    public function model()
    {
        return CssExamples::class;
    }

    public function findBySearch(String $search)
    {

        return $this->pushCriteriaOnce(new ByLikeFieldCriteria('title', $search));
    }

    public function findByData(String $id)
    {

        return $this->pushCriteriaOnce(new SelectCriteria())
            ->pushCriteriaOnce(new ByFieldEqualCriteria('id', $id))
            ->first();
    }

    public function findByCode(String $position)
    {

        return $this->pushCriteriaOnce(new SelectCriteria())
            ->pushCriteriaOnce(new ByFieldEqualCriteria('position', $position))
            ->first();
    }

    public function findByDataAll()
    {
        return $this->pushCriteriaOnce(new SelectCriteria())
            ->pushCriteriaOnce(new OrderByCriteria('position', 'ASC'));
    }
}
