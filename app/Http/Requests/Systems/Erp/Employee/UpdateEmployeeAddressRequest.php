<?php

namespace App\Http\Requests\Systems\Erp\Employee;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeAddressRequest extends FormRequest
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
            'street' => 'required',
            'district' => 'required',
            'number' => 'required',
            'city' => 'required',
            'state' => 'required',
        ];
    }


    /**
     * @return array
     */
    public function messages()
    {
        return [
            'id' => 'Erro id inexistente',
            'street.required' => 'O campo Rua é obrigatório!',
            'district.required' => 'O campo Bairro é obrigatório!',
            'number.required' => 'O campo Numero é obrigatório!',
            'city.required' => 'O campo Cidade é obrigatório!',
            'state.required' => 'O campo Estado é obrigatório!',
        ];
    }


    /**
     * @return array
     */
    public function all($keys = null)
    {
        $data = parent::all($keys);
        $data['id'] =  request()->input('id');
        $data['street'] =  request()->input('street');
        $data['district'] =  request()->input('district');
        $data['number'] =  request()->input('number');
        $data['city'] =  request()->input('city');
        $data['state'] =  request()->input('state');

        request()->merge($data);

        return $data;
    }
}
