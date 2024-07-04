<?php

namespace App\Http\Requests\Systems\Erp\Employee;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'name' => 'required',
            'telephone' => 'required|min:15',
            'email' => 'required|unique:users',
            'street' => 'required',
            'permissions' => 'required|min:1',
            'district' => 'required',
            'number' => 'required',
            'city' => 'required',
            'state' => 'required',
            'cpf' => 'required|min:14',
            'bill' => 'required',
            'agency' => 'required',
            'operation' => 'required',
            'employee_roles_id' => 'required',
        ];
    }


    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'O campo Nome é obrigatório!',
            'telephone.required' => 'O campo Telefone é obrigatório!',
            'street.required' => 'O campo Rua é obrigatório!',
            'district.required' => 'O campo Bairro é obrigatório!',
            'number.required' => 'O campo Numero é obrigatório!',
            'city.required' => 'O campo Cidade é obrigatório!',
            'state.required' => 'O campo Estado é obrigatório!',
            'cpf.required' => 'O campo Cpf é obrigatório!',
            'bill.required' => 'O campo Conta é obrigatório!',
            'agency.required' => 'O campo Agencia é obrigatório!',
            'operation.required' => 'O campo Operação é obrigatório!',
            'employee_roles_id.required' => 'O campo Função é obrigatório!',
            'email.unique' => 'Esse email já está cadastrado!',
            'email.required' => 'O campo Email é obrigatório!',
            'telephone.min' => 'O campo telefone está incompleto!',
            'cpf.min' => 'O campo cpf está incompleto!',
            'permissions.required' => 'O campo permissões é obrigatório!',
            'permissions.min' => 'O campo permissões é obrigatório!',
        ];
    }


    /**
     * @return array
     */
    public function all($keys = null)
    {
        $data = parent::all($keys);
        $data['name'] =  request()->input('name');
        $data['telephone'] =  request()->input('telephone');
        $data['email'] =  empty(request()->input('email')) ? null : request()->input('email');
        $data['street'] =  request()->input('street');
        $data['district'] =  request()->input('district');
        $data['number'] =  request()->input('number');
        $data['city'] =  request()->input('city');
        $data['state'] =  request()->input('state');
        $data['cpf'] =  request()->input('cpf');
        $data['bill'] =  request()->input('bill');
        $data['agency'] =  request()->input('agency');
        $data['operation'] =  request()->input('operation');
        $data['employee_roles_id'] =  request()->input('employee_roles_id');
        $data['permissions'] =  request()->input('permissions');

        request()->merge($data);

        return $data;
    }
}
