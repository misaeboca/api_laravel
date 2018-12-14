<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoFormRequest extends FormRequest
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
            'codigo'    => 'required|max:50' ,
            'nombre'    => 'required|max:100' ,
            'costo'     => 'required|numeric' ,
            'pvp'       => 'required|numeric' ,
            'stock'     => 'required|numeric' ,
            //'imagen'=>'mimes:jpeg,png,bmp',
            'tipo_id'   => 'required' ,
            'proveedor_id'   => 'required'
        ];
    }
}
