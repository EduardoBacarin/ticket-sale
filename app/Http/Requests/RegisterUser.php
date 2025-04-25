<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUser extends FormRequest {
    public function authorize(): bool {
        return true;
    }

    public function rules(): array {
        return [
            'name' => ['required', 'string', 'string', 'max:100'],
            'email' => ['required', 'email', 'string', 'max:100'],
            'password' => ['required', 'string', 'string', 'max:200'],
        ];
    }
}
