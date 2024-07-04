<?php

namespace App\Http\Requests\Systems\Erp\Services;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
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
            'name_service' => 'required',
            'valor_service' => 'required',
            'note_service' => 'nullable'
        ];
    }


    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name_service.required' => 'O campo Nome é obrigatório!',
            'valor_service.required' => 'O campo Valor é obrigatório!',
            'id.required' => 'Erro de ID, entre em contato com supporte!',
        ];
    }


    /**
     * @return array
     */
    public function all($keys = null)
    {
        $data = parent::all($keys);
        $data['id'] =  request()->input('id');
        $data['name_service'] =  request()->input('name_service');
        $data['valor_service'] =  request()->input('valor_service');
        $data['note_service'] =  empty(request()->input('note_service')) ? null : request()->input('note_service');

        request()->merge($data);

        return $data;
    }
}
