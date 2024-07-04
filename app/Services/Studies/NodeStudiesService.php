<?php


namespace App\Services\Studies;

use App\Repositories\Studies\NodeStudiesRepository;

class NodeStudiesService
{

    protected $repository;

    public function __construct(NodeStudiesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function repository()
    {
        return $this->repository;
    }

    public function store($data)
    {

        return $this->repository()->create($data);
    }

    public function all()
    {
        return $this->repository()->findByDataAll()->all();
    }

    public function search(string $search)
    {
        $dataSearch = $this->repository()->findBySearch($search);
        if (isset($dataSearch[0]) && !empty($dataSearch[0])) {
            return $dataSearch;
        } else if (empty($dataSearch[0])) {
            $dataSearchDescription = $this->repository()->findBySearchDescription($search);
            if (isset($dataSearchDescription[0]) && !empty($dataSearchDescription[0])) {
                return $dataSearchDescription;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }


    public function delete($id)
    {
        return $this->repository()->findOrFail($id)->delete();
    }

    public function update($data)
    {
        $update = $this->repository()->findByData($data['id']);
        return $update->update([
            'title' => $data['title'],
            'code' => $data['code'],
            'position' => $data['position'],
            'description' => $data['description']
        ]);
    }
}
