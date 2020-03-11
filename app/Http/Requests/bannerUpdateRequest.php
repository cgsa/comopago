<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bannerUpdateRequest extends FormRequest
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
            'tipo' => 'required',
            'titulo' => 'required|max:50',
            'image' => 'image',
            'status' => 'required',
            'subtitulo' => 'required',
            'boton_titulo'=>'required|max:30',
            'link'=>'required',
            'descripcion' => 'required',
        ];
    }
}
