<?php

namespace App\Http\Requests\Systems\Erp;

use Illuminate\Foundation\Http\FormRequest;

class RequestSelectGenericService extends FormRequest
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
            'q' => 'sometimes',
            'max_results' => 'sometimes|numeric'
        ];
    }


    /**
     * @return array
     */
    public function all($keys = null)
    {
        $data = parent::all($keys);
        $data['q'] =  empty(request()->input('q')) ? null : request()->input('q');
        $data['max_results'] =  empty(request()->input('max_results')) ? 9 : request()->input('max_results');

        request()->merge($data);

        return $data;
    }
}
