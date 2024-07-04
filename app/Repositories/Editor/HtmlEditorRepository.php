<?php

namespace App\Repositories\Editor;

use Czim\Repository\ExtendedRepository as Repository;
use App\Models\Editor\HtmlEditor;
use App\Repositories\Criteria\ByFieldEqualCriteria;
use App\Repositories\Criteria\SelectCriteria;
use App\Repositories\Criteria\OrderByCriteria;

class HtmlEditorRepository extends Repository
{

    public function model()
    {
        return HtmlEditor::class;
    }

    public function findByData(String $id)
    {

        return $this->pushCriteriaOnce(new SelectCriteria())
            ->pushCriteriaOnce(new ByFieldEqualCriteria('id', $id))
            ->first();
    }

    public function findByPosition(String $position)
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
