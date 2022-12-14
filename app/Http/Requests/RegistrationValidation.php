<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Password;

class RegistrationValidation extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => array('required',\Illuminate\Validation\Rules\Password::min(6)->mixedCase()),
            'password_confirmation' => 'required|same:password',
            'check' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Имя должно быть заполнено',
            'email.required' => 'Почта должна быть заполнена',
            'email.unique' => 'Эта почта уже используется',
            'password.min' => [
                'string' => 'Пароль должен состоять минимум из 6 символов',
            ],
            'password.password' => [
                'mixed' => 'Пароль должен содержать хотя бы одну заглавную букву',
            ],
            'password.required' => 'Пароль должен быть заполнен',
            'password_confirmation.required' => 'Пароль должен быть подтвержден',
            'password_confirmation.same' => 'Пароли не совпадают',
            'check.required' => 'Подствердите согласие',
        ];
    }
}
