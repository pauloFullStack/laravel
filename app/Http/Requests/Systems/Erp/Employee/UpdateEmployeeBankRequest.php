<?php

namespace App\Http\Requests\Systems\Erp\Employee;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeBankRequest extends FormRequest
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
            'id' => 'required',
            'cpf' => 'required|min:14',
            'bill' => 'required',
            'agency' => 'required',
            'operation' => 'required',
        ];
    }


    /**
     * @return array
     */
    public function messages()
    {
        return [
            'id' => 'Erro id inexistente',
            'cpf.required' => 'O campo Cpf é obrigatório!',
            'cpf.min' => 'O campo cpf está incompleto!',
            'bill.required' => 'O campo Conta é obrigatório!',
            'agency.required' => 'O campo Agencia é obrigatório!',
            'operation.required' => 'O campo Operação é obrigatório!',
        ];
    }


    /**
     * @return array
     */
    public function all($keys = null)
    {
        $data = parent::all($keys);
        $data['id'] =  request()->input('id');
        $data['cpf'] =  request()->input('cpf');
        $data['bill'] =  request()->input('bill');
        $data['agency'] =  request()->input('agency');
        $data['operation'] =  request()->input('operation');

        request()->merge($data);

        return $data;
    }
}
