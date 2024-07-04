<?php


namespace App\Services;

use DateTime;

abstract class SelectAbstract implements ServiceInterfaceRepository
{
    /**
     * @var object
     */
    protected $repository;

    /**
     * @param object $repository
     */
    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return object
     */
    public function repository()
    {
        return $this->repository;
    }

    /**
     * @return object
     */
    public function all()
    {
        $search = request()->input('q');
        $maxResults = request()->input('max_results');

        if (!empty($search)) {
            return $this->repository()->findBySearch($search)->getLimit($maxResults)->all();
        }

        if ($maxResults) {
            return $this->repository()->findByDataAll()->getLimit($maxResults)->all();
        }

        return $this->repository()->findByDataAll()->paginate(5);
    }

    /**
     * @param array $data
     * @return object
     */
    public function store(array $data)
    {
        return $this->repository()->create($data);
    }


    public function update(array $data)
    {
        $update = $this->repository()->findByData($data['id']);
        return $update->update([
            'id' => $data['id'],
            'name' => $data['name']
        ]);
    }


    public function delete($id)
    {
        $date = new DateTime();
        $deleteSelect = $this->repository()->find($id);
        $deleteSelect->update([
            'deleted_at' => $date->format('Y-m-d H:i:s'),
        ]);

        return $deleteSelect->id;
    }
}
