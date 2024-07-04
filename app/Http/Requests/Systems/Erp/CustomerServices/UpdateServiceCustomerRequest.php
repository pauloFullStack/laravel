<?php

namespace App\Http\Requests\Systems\Erp\CustomerServices;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceCustomerRequest extends FormRequest
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
            'serviceNameId' => 'required',
            'valueService' => 'required|min:0',
            'serviceDeliveryDate' => 'nullable',
            'paymentDateCustomer' => 'nullable',
            'statusServiceCustomer' => 'required',
            'paymentstatusCustomer' => 'required',
            'id' => 'required',
        ];
    }


    /**
     * @return array
     */
    public function messages()
    {
        return [
            'serviceNameId.required' => 'O campo serviço é obrigatório!',
            'id.required' => 'Contate o supporte, erro de ID do cliente!',
            'valueService.required' => 'O campo Valor é obrigatório e deve ser maior que 0!',
            'valueService.min' => 'O campo Valor é obrigatório e deve ser maior que 0!',
        ];
    }


    /**
     * @return array
     */
    public function all($keys = null)
    {
        $data = parent::all($keys);
        $data['serviceNameId'] = request()->input('serviceNameId');
        $data['valueService'] = request()->input('valueService');
        $data['serviceDeliveryDate'] =  empty(request()->input('serviceDeliveryDate')) ? null : request()->input('serviceDeliveryDate');
        $data['paymentDateCustomer'] =  empty(request()->input('paymentDateCustomer')) ? null : request()->input('paymentDateCustomer');
        $data['statusServiceCustomer'] = request()->input('statusServiceCustomer');
        $data['paymentstatusCustomer'] = request()->input('paymentstatusCustomer');
        $data['id'] = request()->input('id');

        request()->merge($data);

        return $data;
    }
}
