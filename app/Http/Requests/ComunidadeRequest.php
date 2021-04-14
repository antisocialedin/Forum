<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComunidadeRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo'=>'required|string|max:50',
            'sigla'=>'required|string|max:4',
            'descricao'=>'required|string|max:250',
        ];
    }
}
