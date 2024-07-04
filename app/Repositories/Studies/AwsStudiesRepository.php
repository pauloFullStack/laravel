<?php

namespace App\Repositories\Studies;

use Czim\Repository\ExtendedRepository as Repository;
use App\Models\Editor\AwsEditor;
use App\Repositories\Criteria\ByFieldEqualCriteria;
use App\Repositories\Criteria\OrderByCriteria;
use App\Repositories\Criteria\SelectCriteria;
use Symfony\Component\CssSelector\Node\SelectorNode;

class AwsStudiesRepository extends Repository
{

    public function model()
    {
        return AwsEditor::class;
    }

    public function findByData(String $id)
    {

        return $this->pushCriteriaOnce(new SelectCriteria())
            ->pushCriteriaOnce(new ByFieldEqualCriteria('id', $id))
            ->first();
    }

    public function findBySearch(String $search)
    {

        return AwsEditor::where([
            ['title', 'LIKE', '%' . $search . '%']
        ])->get();
    }

    public function findBySearchDescription(String $search)
    {

        return AwsEditor::where([
            ['description', 'LIKE', '%' . $search . '%']
        ])->get();
    }


    public function findByDataAll()
    {
        return $this->pushCriteriaOnce(new SelectCriteria())
            ->pushCriteriaOnce(new OrderByCriteria('position', 'ASC'));
    }
}
