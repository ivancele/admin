<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class RegisterUser extends FormRequest
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
            'firstNames' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'idNumber' => ['required', 'string', 'max:13'],
            'grade' => ['nullable', 'integer', 'max:3'],
            'section' => ['nullable', 'string', 'max:3'],
            'parent_id' => ['nullable', 'integer'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ];
    }
}
