<?php

namespace App\Http\Requests;

use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use App\Http\Controllers\Auth\LoginController;

class LoginRequest extends FormRequest
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

    public function rules(): array
    {
        return [
            'email' => 'required',
            'password' => 'required'
        ];
    }

    public function getCredentials()
    {
        $email = $this->get('email');
        if ($this->isEmail($email)) {
            return [
                'email' => $email,
                'password' => $this->get('password')
            ];
        }
        return $this->only('email', 'password');
    }

    public function isEmail($value)
    {
        $factory = $this->container->make(ValidationFactory::class);

        return !$factory->make(['email' => $value], ['email' => 'email'])->fails();
    }


}