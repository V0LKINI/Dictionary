<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'credentials' => ['required'],
            'password' => ['required', 'string', 'min:6'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
