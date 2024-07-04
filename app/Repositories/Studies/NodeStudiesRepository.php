<?php

namespace App\Repositories\Studies;

use Czim\Repository\ExtendedRepository as Repository;
use App\Models\Editor\NodeEditor;
use App\Repositories\Criteria\ByFieldEqualCriteria;
use App\Repositories\Criteria\OrderByCriteria;
use App\Repositories\Criteria\SelectCriteria;
use Symfony\Component\CssSelector\Node\SelectorNode;

class NodeStudiesRepository extends Repository
{

    public function model()
    {
        return NodeEditor::class;
    }

    public function findByData(String $id)
    {

        return $this->pushCriteriaOnce(new SelectCriteria())
            ->pushCriteriaOnce(new ByFieldEqualCriteria('id', $id))
            ->first();
    }

    public function findBySearch(String $search)
    {

        return NodeEditor::where([
            ['title', 'LIKE', '%' . $search . '%']
        ])->get();
    }

    public function findBySearchDescription(String $search)
    {

        return NodeEditor::where([
            ['description', 'LIKE', '%' . $search . '%']
        ])->get();
    }


    public function findByDataAll()
    {
        return $this->pushCriteriaOnce(new SelectCriteria())
            ->pushCriteriaOnce(new OrderByCriteria('position', 'ASC'));
    }
}
