<?php


namespace App\Services\Systems\Erp;

use App\Repositories\Systems\Erp\ErpServiceRepository;
use App\Services\ServiceAbstract;
use DateTime;

class ErpServicesService extends ServiceAbstract
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
        $data['valor_service'] = str_replace(['.', ','], ['', '.'], $data['valor_service']);
        return $this->repository()->create($data);
    }

    public function all($paginate = null)
    {
        $search = request()->input('q');
        $maxResults = request()->input('max_results');

        if (!empty($search)) {
            return $this->repository()->findBySearch($search)->getLimit($maxResults)->all();
        } else if (!empty($maxResults)) {
            return $this->repository()->findByDataAll()->getLimit($maxResults)->all();
        } else {
            return $this->repository()->findByDataAll()->paginate(5);
        }
    }


    public function delete($id)
    {
        $date = new DateTime();
        $deleteService = $this->repository()->find($id);
        $deleteService->update([
            'deleted_at' => $date->format('Y-m-d H:i:s'),
        ]);

        return $deleteService->id;
    }

    public function update(array $data)
    {
        $update = $this->repository()->findByData($data['id']);
        return $update->update([
            'name_service' => $data['name_service'],
            'valor_service' => str_replace(['.', ','], ['', '.'], $data['valor_service']),
            'note_service' => $data['note_service'],
        ]);
    }
}
