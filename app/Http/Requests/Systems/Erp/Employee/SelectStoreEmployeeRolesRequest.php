<?php

namespace App\Http\Requests\Systems\Erp\Employee;

use Illuminate\Foundation\Http\FormRequest;

class SelectStoreEmployeeRolesRequest extends FormRequest
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
            'name_function_roles' => 'required',
        ];
    }


    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name_function_roles.required' => 'O campo Nome é obrigatório!',
        ];
    }


    /**
     * @return array
     */
    public function all($keys = null)
    {
        $data = parent::all($keys);
        $data['name'] =  request()->input('name_function_roles');

        request()->merge($data);

        return $data;
    }
}
