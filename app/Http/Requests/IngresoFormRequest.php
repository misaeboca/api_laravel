<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngresoFormRequest extends FormRequest
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
            'proveedor_id'=>'required',
            'tipo_comprobacion'=> 'required|max:20',
            'serial_comprobacion'=> 'max:7',
            'numero_comprobacion'=> 'required|max:10', 
            'producto_id'=>'required',
            'cantidad'=>'required',
            'precio_compra'=>'required|numeric',
            'precio_venta'=>'required|numeric'
        ];
    }
}
