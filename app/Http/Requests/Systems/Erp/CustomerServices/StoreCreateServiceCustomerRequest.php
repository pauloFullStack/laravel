<?php

namespace App\Http\Requests\Systems\Erp\CustomerServices;

use Illuminate\Foundation\Http\FormRequest;

class StoreCreateServiceCustomerRequest extends FormRequest
{


    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'services_id' => 'required',
            'customers_id' => 'required',
            'valor_service' => 'required|min:0',
            'status_service_id' => 'nullable',
            'payment_status_id' => 'nullable',
            'service_delivery_date' => 'nullable',
            'payment_date' => 'nullable',
            'responsible_collaborator' => 'required',
        ];
    }


    /**
     * @return array
     */
    public function messages()
    {
        return [
            'services_id.required' => 'O campo serviço é obrigatório!',
            'customers_id.required' => 'Contate o supporte, erro de ID do cliente!',
            'valor_service.required' => 'O campo Valor é obrigatório e deve ser maior que 0!',
            'valor_service.min' => 'O campo Valor é obrigatório e deve ser maior que 0!',
            'responsible_collaborator.required' => 'O campo Colaborador Responsável é obrigatório!',
        ];
    }


    /**
     * @return array
     */
    public function all($keys = null)
    {
        $data = parent::all($keys);
        $data['services_id'] =  empty(request()->input('services_id')) ? null : request()->input('services_id');
        $data['customers_id'] =  empty(request()->input('customers_id')) ? null : request()->input('customers_id');
        $data['valor_service'] =  empty(request()->input('valor_service')) ? null : request()->input('valor_service');
        $data['status_service_id'] =  empty(request()->input('status_service_id')) ? 1 : request()->input('status_service_id');
        $data['payment_status_id'] =  empty(request()->input('payment_status_id')) ? 1 : request()->input('payment_status_id');
        $data['service_delivery_date'] =  empty(request()->input('service_delivery_date')) ? null : request()->input('service_delivery_date');
        $data['payment_date'] =  empty(request()->input('payment_date')) ? null : request()->input('payment_date');
        $data['responsible_collaborator'] = request()->input('responsible_collaborator');

        request()->merge($data);

        return $data;
    }
}
