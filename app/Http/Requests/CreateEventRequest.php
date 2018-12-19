<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required | alpha_num | max:45',
            'descripcion' => 'required | max:45',
            'categoria' => 'required | numeric | digits_between:1,11 | exists:categoria,CA_ID',
            'lugar' => 'required | max:45',
            'prize' => 'required | max:45',
            'fecha' => 'required | date',
            // 'img' => 'required | image | max:255'
        ];   
    }

    
    public function messages(){
        return [
            'img.max' => 'Eliga una ruta mas corta',
        ];
    }
}
