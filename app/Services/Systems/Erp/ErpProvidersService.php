<?php


namespace App\Services\Systems\Erp;

use App\Repositories\Systems\Erp\ErpServiceRepository;
use App\Services\ServiceAbstract;

class ErpProvidersService extends ServiceAbstract
{

    protected $repository;

    public function __construct(ErpServiceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function repository()
    {
        return $this->repository;
    }

    public function store(array $data)
    {

        return $this->repository()->create($data);
    }

    public function all($paginate = null)
    {
        return $this->repository()->findByDataAll()->all();
    }


    public function delete($id)
    {
        return $this->repository()->findOrFail($id)->delete();
    }

    public function update(array $data)
    {
        $update = $this->repository()->findByData($data['id']);
        return $update->update([
            'name_service' => $data['name_service'],
            'valor_service' => $data['valor_service'],
            'note_service' => $data['note_service'],
        ]);
    }
}
