<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventReserveRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'client_name' => ['required', 'string'],
            'places' => ['required', 'array'],
        ];
    }
}
