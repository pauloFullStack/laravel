<?php

namespace App\Http\Requests\Editor;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEditorGenericRequest extends FormRequest
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
            'title' => 'required',
            'position' => 'required',
            'code' => 'nullable',
            'description' => 'required',
        ];
    }


    /**
     * @return array
     */
    public function messages()
    {
        return [
            'id.required' => 'ID não encotrado, entre em contato com suporte!',
            'title.required' => 'O campo Titulo é obrigatório!',
            'position.required' => 'O campo Posição é obrigatório!',
            'description.required' => 'O campo Descrição é obrigatório!',
        ];
    }


    /**
     * @return array
     */
    public function all($keys = null)
    {
        $data = parent::all($keys);
        $data['id'] =  request()->input('id');
        $data['title'] =  request()->input('title');
        $data['position'] =  request()->input('position');
        $data['code'] =  empty(request()->input('code')) ? null : request()->input('code');
        $data['description'] =  request()->input('description');

        request()->merge($data);

        return $data;
    }
}
