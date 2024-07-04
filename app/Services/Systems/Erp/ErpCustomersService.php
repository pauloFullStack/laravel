<?php


namespace App\Services\Systems\Erp;

use App\Repositories\Systems\Erp\ErpCustomersRepository;
use App\Services\Systems\Erp\ErpCustomersServicesService;
use App\Services\Systems\Erp\ErpStatusService;
use App\Services\Systems\Erp\ErpStatusPayment;
use App\Services\ServiceAbstract;

class ErpCustomersService extends ServiceAbstract
{
    /**
     * @var ErpCustomersRepository
     */
    protected $repository;

    /**
     * @var ErpCustomersServicesService
     */
    protected $erpCustomersServicesService;

    /**
     * @var ErpStatusService
     */
    protected $erpStatusService;

    /**
     * @var ErpStatusPayment
     */
    protected $erpStatusPayment;




    public function __construct(
        ErpCustomersRepository $repository,
        ErpCustomersServicesService $erpCustomersServicesService,
        ErpStatusService $erpStatusService,
        ErpStatusPayment $erpStatusPayment
    ) {
        $this->repository = $repository;
        $this->erpCustomersServicesService = $erpCustomersServicesService;
        $this->erpStatusService = $erpStatusService;
        $this->erpStatusPayment = $erpStatusPayment;
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
        return $this->repository()->findByDataAll()->paginate(5);
    }

    public function delete($id)
    {
        $erpCustomersServices = $this->erpCustomersServicesService->repository()->findWhere(['customers_id' => $id]);

        if (isset($erpCustomersServices) && !empty($erpCustomersServices)) {
            foreach ($erpCustomersServices as $erpCustomersService) {
                $this->erpCustomersServicesService->repository()->find($erpCustomersService->id)->delete();
            }
        }
        $customer = $this->repository()->find($id);
        return $customer->delete();
    }

    public function update(array $data)
    {
        $update = $this->repository()->findByData($data['id']);
        return $update->update([
            'name' => $data['name'],
            'telephone' => $data['telephone'],
            'email' => $data['email'],
        ]);
    }

    public function customer($id)
    {

        $erpCustomersServices = $this->erpCustomersServicesService->repository()->findByDataAll($id)->paginate(5);


        if ($erpCustomersServices && $erpCustomersServices->total() > 0) {

            $erpCustomersServices->name = $erpCustomersServices[0]->customer->name;

            return $erpCustomersServices;
        }

        $erpCustomers = $this->repository()->find($id);

        if (isset($erpCustomers)) {
            $erpCustomersServices->name = $erpCustomers->name;

            return $erpCustomersServices;
        }

        return null;
    }

    public function getStatusPayment()
    {
        return $this->erpStatusPayment->all();
    }

    public function getStatusService()
    {

        return $this->erpStatusService->all();
    }
}
