<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nick'=>'required|string|max:10',
            'email'=>'required|string|email|max:50',
            'selo'=>'required|string|max:15',
            'senha'=>'required|string|max:20',
            'confirmar_senha'=>'required|string|max:20',
        ];
    }
}
