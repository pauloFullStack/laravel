<?php


namespace App\Services\Systems\Erp;

use App\Repositories\Systems\Erp\ErpCustomersServicesRepository;
use App\Services\ServiceAbstract;

class ErpCustomersServicesService extends ServiceAbstract
{

    protected $repository;

    public function __construct(ErpCustomersServicesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function repository()
    {
        return $this->repository;
    }

    public function store(array $data)
    {
        if (isset($data['service_delivery_date'])) {
            $data['service_delivery_date'] = $this->formatDate($data['service_delivery_date']);
        }

        if (isset($data['payment_date'])) {
            $data['payment_date'] = $this->formatDate($data['payment_date']);
        }

        $data['work_status'] = $data['status_service_id'];
        $data['valor_service'] = str_replace(['.', ','], ['', '.'], $data['valor_service']);
        return $this->repository()->create($data);
    }

    public function all($paginate = null)
    {
        return $this->repository()->findByAll()->paginate(5);
    }

    public function delete($id)
    {
        return $this->repository()->findOrFail($id)->delete();
    }

    public function update(array $data)
    {
        $update = $this->repository()->findByServiceCustomer($data['id']);

        if (isset($data['serviceDeliveryDate'])) {
            $data['serviceDeliveryDate'] = $this->formatDate($data['serviceDeliveryDate']);
        }

        if (isset($data['paymentDateCustomer'])) {
            $data['paymentDateCustomer'] = $this->formatDate($data['paymentDateCustomer']);
        }

        $statusUpdate = $update->update([
            'services_id' => $data['serviceNameId'],
            'valor_service' => str_replace(['.', ','], ['', '.'], $data['valueService']),
            'service_delivery_date' => $data['serviceDeliveryDate'],
            'payment_date' => $data['paymentDateCustomer'],
            'status_service_id' => $data['statusServiceCustomer'],
            'work_status' => $data['statusServiceCustomer'],
            'payment_status_id' => $data['paymentstatusCustomer'],
            'responsible_collaborator' => $data['responsible_collaborator'],
        ]);

        if ($statusUpdate) {
            return $this->repository()->findByServiceCustomer($data['id']);
        }

        return null;
    }

    public function getFilter($paymentStatus, $serviceStatus, $serviceType, $idCustomer)
    {
        $data = null;
        $resultsFilter = $this->repository()->filterBy($paymentStatus, $serviceStatus, $serviceType, $idCustomer);


        foreach ($resultsFilter->cursor() as $resultFilter) {
            $data[] = $resultFilter;
        }

        if (isset($data)) {
            return $data;
        }

        return $data[0] = ['erro' => null];
    }

    public function getWorksEmployee()
    {
        return $this->repository()->findByWorksEmployee()->paginate(5);
    }

    public function myWorksStatusUpdate($data)
    {
        $updateWorkStatus = $this->repository()->find($data['id']);
        $id = $data['id'];
        unset($data['id']);
        $data['status_service_id'] = $data['work_status'];
        if ($updateWorkStatus->update($data)) {
            return $this->repository()->find($id);
        }
        return null;
    }

    public function formatDate($date)
    {
        $dateService = explode('/', $date);
        if (count($dateService) == 3) {
            return $dateService[2] . '-' . $dateService[1] . '-' . $dateService[0];
        } else {
            return null;
        }
    }

    public function checkServices($id, $column)
    {
        if ($this->repository()->findWhere([$column => $id])->first()) {
            return [
                'message' => $this->typeMessage($column)
            ];
        } else {
            return [
                'message' => 'Deseja realmente excluir <span style="color:#000" ><b>%cliente%</b></span>?'
            ];
        }
    }

    public function typeMessage($type)
    {

        if ($type == 'customers_id') {
            return 'Existe <span style="color:#000" ><b>histórico de serviço</b></span> para <span style="color:#000" ><b>%cliente%</b></span>, <span style="color:#ff0000" ><b>será excluido todos os serviços</b></span>, deseja realmente excluir?';
            
        } else if ($type == 'responsible_collaborator') {
            return 'Existe <span style="color:#000" ><b>serviços vinculados</b></span> para <span style="color:#000" ><b>%cliente%</b></span>, <span style="color:#ff0000" ><b>Todos os serviços serão transferidos para o usuario MASTER</b></span>, deseja realmente excluir?';
        }
    }
}
