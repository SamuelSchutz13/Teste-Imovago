<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestPerson extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $request = [];
        if($this->method() == 'POST') {
            return [
                'nome' => 'required',
                'email' => 'required',  
                'telefone' => 'required',
            ];
        }
        return $request;
    }
}
