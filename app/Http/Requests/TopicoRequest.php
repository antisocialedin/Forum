<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TopicoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo'=>'required|string|max:100',
            'conteudo'=>'required|string|max:1000',
            'avaliacao'=>'numeric',
        ];
    }
}
