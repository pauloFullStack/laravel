<?php

namespace App\Http\Requests\Systems\Erp\Employee;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeBasicRequest extends FormRequest
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
            'name' => 'required',
            'telephone' => 'required|min:15',
            'email' => 'required',
            'permissions' => 'required|min:1',
            'employee_roles_id' => 'required',
        ];
    }


    /**
     * @return array
     */
    public function messages()
    {
        return [
            'id' => 'Erro id inexistente',
            'name.required' => 'O campo Nome é obrigatório!',
            'telephone.required' => 'O campo Telefone é obrigatório!',
            'telephone.min' => 'O campo telefone está incompleto!',
            'employee_roles_id.required' => 'O campo Função é obrigatório!',
            'email.unique' => 'Esse email já está cadastrado!',
            'email.required' => 'O campo Email é obrigatório!',
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
        $data['id'] =  request()->input('id');
        $data['name'] =  request()->input('name');
        $data['telephone'] =  request()->input('telephone');
        $data['email'] =  empty(request()->input('email')) ? null : request()->input('email');
        $data['employee_roles_id'] =  request()->input('employee_roles_id');
        $data['permissions'] =  request()->input('permissions');

        request()->merge($data);

        return $data;
    }
}
