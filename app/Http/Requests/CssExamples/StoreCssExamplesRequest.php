<?php

namespace App\Http\Requests\CssExamples;

use Illuminate\Foundation\Http\FormRequest;

class StoreCssExamplesRequest extends FormRequest
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
            'title' => 'required',
            'position' => 'required',
            'image' => 'nullable',
            'code_image' => 'required',
        ];
    }


    /**
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'O campo Titulo é obrigatório!',
            'position.required' => 'O campo Posição é obrigatório!',
            'image.required' => 'O campo Image é obrigatório!',
            'code_image.required' => 'O campo Código é obrigatório!',
        ];
    }


    /**
     * @return array
     */
    public function all($keys = null)
    {
        $data = parent::all($keys);
        $data['title'] =  request()->input('title');
        $data['position'] =  request()->input('position');
        $data['image'] =  empty(request()->input('image')) ? null : request()->input('image');
        $data['code_image'] =  request()->input('code_image');

        request()->merge($data);

        return $data;
    }
}
