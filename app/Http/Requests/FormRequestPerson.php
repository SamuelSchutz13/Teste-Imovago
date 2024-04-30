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
        if($this->method() == 'POST' || $this->method() == 'PUT'){
            $personId = $this->route('id');
            return [
                'nome' => 'required',
                'email' => 'required|unique:people,email,'.$personId,
                'telefone' => 'required|unique:people,telefone,'.$personId,
                'cpf' => 'required|unique:people,cpf,'.$personId,
            ];
        }
        return $request;
    }
}
