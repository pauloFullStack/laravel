<?php

namespace App\Http\Requests\Systems\Erp\Customer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
            'email' => 'nullable',
        ];
    }


    /**
     * @return array
     */
    public function messages()
    {
        return [
            'id.required' => 'ID não encotrado, entre em contato com suporte!',
            'name.required' => 'O campo Nome é obrigatório!',
            'telephone.required' => 'O campo Telefone é obrigatório!',
            'telephone.min' => 'O campo telefone está incompleto!',
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

        request()->merge($data);

        return $data;
    }
}
