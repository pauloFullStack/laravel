<?php

namespace App\Repositories\Systems\Erp;

use Czim\Repository\ExtendedRepository as Repository;
use App\Models\Systems\Erp\ErpCustomersServices;
use App\Repositories\Criteria\ByFieldEqualCriteria;
use App\Repositories\Criteria\SelectCriteria;
use App\Repositories\Criteria\OrderByCriteria;
use Symfony\Component\CssSelector\Node\SelectorNode;

class ErpCustomersServicesRepository extends Repository
{

    public function model()
    {
        return ErpCustomersServices::class;
    }

    public function findByData(String $id)
    {

        return $this->pushCriteriaOnce(new SelectCriteria())
            ->pushCriteriaOnce(new ByFieldEqualCriteria('id', $id))
            ->first();
    }

    public function findByServiceCustomer(String $id)
    {

        return $this->pushCriteriaOnce(new SelectCriteria())
            ->pushCriteriaOnce(new ByFieldEqualCriteria('id', $id))
            ->first();
    }

    public function filterBy($paymentStatus, $serviceStatus, $serviceType, $idCustomer = 0)
    {

        if ($idCustomer) {
            if ($paymentStatus > 0 && $serviceStatus > 0 && $serviceType > 0) {
                return $this->pushCriteriaOnce(new SelectCriteria())
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('services_id', $serviceType))
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('status_service_id', $serviceStatus))
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('payment_status_id', $paymentStatus))
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('customers_id', $idCustomer))
                    ->pushCriteriaOnce(new OrderByCriteria('created_at', 'ASC'))
                    ->query();
            } else if ($paymentStatus > 0 && $serviceStatus == 0 && $serviceType == 0) {
                return $this->pushCriteriaOnce(new SelectCriteria())
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('payment_status_id', $paymentStatus))
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('customers_id', $idCustomer))
                    ->pushCriteriaOnce(new OrderByCriteria('created_at', 'ASC'))
                    ->query();
            } else if ($paymentStatus > 0 && $serviceStatus > 0 && $serviceType == 0) {
                return $this->pushCriteriaOnce(new SelectCriteria())
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('payment_status_id', $paymentStatus))
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('status_service_id', $serviceStatus))
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('customers_id', $idCustomer))
                    ->pushCriteriaOnce(new OrderByCriteria('created_at', 'ASC'))
                    ->query();
            } else if ($paymentStatus > 0 && $serviceStatus == 0 && $serviceType > 0) {
                return $this->pushCriteriaOnce(new SelectCriteria())
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('payment_status_id', $paymentStatus))
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('services_id', $serviceType))
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('customers_id', $idCustomer))
                    ->pushCriteriaOnce(new OrderByCriteria('created_at', 'ASC'))
                    ->query();
            } else if ($paymentStatus == 0 && $serviceStatus > 0 && $serviceType == 0) {
                return $this->pushCriteriaOnce(new SelectCriteria())
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('status_service_id', $serviceStatus))
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('customers_id', $idCustomer))
                    ->pushCriteriaOnce(new OrderByCriteria('created_at', 'ASC'))
                    ->query();
            } else if ($paymentStatus == 0 && $serviceStatus > 0 && $serviceType > 0) {
                return $this->pushCriteriaOnce(new SelectCriteria())
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('status_service_id', $serviceStatus))
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('services_id', $serviceType))
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('customers_id', $idCustomer))
                    ->pushCriteriaOnce(new OrderByCriteria('created_at', 'ASC'))
                    ->query();
            } else if ($paymentStatus == 0 && $serviceStatus == 0 && $serviceType > 0) {
                return $this->pushCriteriaOnce(new SelectCriteria())
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('services_id', $serviceType))
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('customers_id', $idCustomer))
                    ->pushCriteriaOnce(new OrderByCriteria('created_at', 'ASC'))
                    ->query();
            } else if ($paymentStatus == 0 && $serviceStatus == 0 && $serviceType == 0) {
                return $this->pushCriteriaOnce(new SelectCriteria())
                    ->pushCriteriaOnce(new OrderByCriteria('created_at', 'ASC'))
                    ->pushCriteriaOnce(new ByFieldEqualCriteria('customers_id', $idCustomer))
                    ->query();
            }
        }

        if ($paymentStatus > 0 && $serviceStatus > 0 && $serviceType > 0) {
            return $this->pushCriteriaOnce(new SelectCriteria())
                ->pushCriteriaOnce(new ByFieldEqualCriteria('services_id', $serviceType))
                ->pushCriteriaOnce(new ByFieldEqualCriteria('status_service_id', $serviceStatus))
                ->pushCriteriaOnce(new ByFieldEqualCriteria('payment_status_id', $paymentStatus))
                ->pushCriteriaOnce(new OrderByCriteria('created_at', 'ASC'))
                ->query();
        } else if ($paymentStatus > 0 && $serviceStatus == 0 && $serviceType == 0) {
            return $this->pushCriteriaOnce(new SelectCriteria())
                ->pushCriteriaOnce(new ByFieldEqualCriteria('payment_status_id', $paymentStatus))
                ->pushCriteriaOnce(new OrderByCriteria('created_at', 'ASC'))
                ->query();
        } else if ($paymentStatus > 0 && $serviceStatus > 0 && $serviceType == 0) {
            return $this->pushCriteriaOnce(new SelectCriteria())
                ->pushCriteriaOnce(new ByFieldEqualCriteria('payment_status_id', $paymentStatus))
                ->pushCriteriaOnce(new ByFieldEqualCriteria('status_service_id', $serviceStatus))
                ->pushCriteriaOnce(new OrderByCriteria('created_at', 'ASC'))
                ->query();
        } else if ($paymentStatus > 0 && $serviceStatus == 0 && $serviceType > 0) {
            return $this->pushCriteriaOnce(new SelectCriteria())
                ->pushCriteriaOnce(new ByFieldEqualCriteria('payment_status_id', $paymentStatus))
                ->pushCriteriaOnce(new ByFieldEqualCriteria('services_id', $serviceType))
                ->pushCriteriaOnce(new OrderByCriteria('created_at', 'ASC'))
                ->query();
        } else if ($paymentStatus == 0 && $serviceStatus > 0 && $serviceType == 0) {
            return $this->pushCriteriaOnce(new SelectCriteria())
                ->pushCriteriaOnce(new ByFieldEqualCriteria('status_service_id', $serviceStatus))
                ->pushCriteriaOnce(new OrderByCriteria('created_at', 'ASC'))
                ->query();
        } else if ($paymentStatus == 0 && $serviceStatus > 0 && $serviceType > 0) {
            return $this->pushCriteriaOnce(new SelectCriteria())
                ->pushCriteriaOnce(new ByFieldEqualCriteria('status_service_id', $serviceStatus))
                ->pushCriteriaOnce(new ByFieldEqualCriteria('services_id', $serviceType))
                ->pushCriteriaOnce(new OrderByCriteria('created_at', 'ASC'))
                ->query();
        } else if ($paymentStatus == 0 && $serviceStatus == 0 && $serviceType > 0) {
            return $this->pushCriteriaOnce(new SelectCriteria())
                ->pushCriteriaOnce(new ByFieldEqualCriteria('services_id', $serviceType))
                ->pushCriteriaOnce(new OrderByCriteria('created_at', 'ASC'))
                ->query();
        } else if ($paymentStatus == 0 && $serviceStatus == 0 && $serviceType == 0) {
            return $this->pushCriteriaOnce(new SelectCriteria())
                ->pushCriteriaOnce(new OrderByCriteria('created_at', 'ASC'))
                ->query();
        }
    }

    public function findByDataAll($id = null)
    {
        if (is_null($id)) {
            return $this->pushCriteriaOnce(new SelectCriteria())
                ->pushCriteriaOnce(new OrderByCriteria('created_at', 'DESC'));
        }

        return $this->pushCriteriaOnce(new SelectCriteria())
            ->pushCriteriaOnce(new ByFieldEqualCriteria('customers_id', $id))
            ->pushCriteriaOnce(new OrderByCriteria('created_at', 'DESC'))->query();
    }


    public function findByAll()
    {
        return $this->pushCriteriaOnce(new SelectCriteria())
            ->pushCriteriaOnce(new OrderByCriteria('created_at', 'DESC'))->query();
    }

    public function findByWorksEmployee()
    {
        return $this->pushCriteriaOnce(new SelectCriteria())
            ->pushCriteriaOnce(new ByFieldEqualCriteria('responsible_collaborator', auth()->user()->id))
            ->pushCriteriaOnce(new OrderByCriteria('created_at', 'DESC'))->query();
    }
}
