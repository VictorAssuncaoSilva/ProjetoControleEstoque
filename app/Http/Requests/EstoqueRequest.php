<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstoqueRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'item' => 'required',
            'tamanho' => 'required',
            'quantidade' => 'required|integer'
        ];
    }
}
