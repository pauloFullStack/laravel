<?php


namespace App\Services\Editor;

use App\Repositories\Editor\LaravelEditorRepository;

class LaravelEditorService extends EditorAbstract
{

    protected $repository;

    public function __construct(LaravelEditorRepository $repository)
    {
        parent::__construct($repository);
        $this->repository = $repository;
    }

    public function repository()
    {
        return $this->repository;
    }

    public function store($data)
    {
        $position = $this->repository()->findByPosition($data['position']);
        if (isset($position)) {
            return 'existe';
        } else {
            return $this->repository()->create($data);
        }
    }

    public function all()
    {
        return $this->repository()->findByDataAll()->paginate(5);
    }

    public function delete($id)
    {
        return $this->repository()->findOrFail($id)->delete();
    }
}
