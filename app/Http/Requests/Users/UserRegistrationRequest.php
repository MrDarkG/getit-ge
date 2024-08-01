<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $name
 * @property string $surname
 * @property string $personal_number
 * @property string $address
 * @property string $phone_number
 * @property string $email
 * @property string $password
 */
class UserRegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'personal_number' => ['required', 'string', 'max:11'],
            'address' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getPersonalNumber(): string
    {
        return $this->personal_number;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->getName(),
            'surname' => $this->getSurname(),
            'personal_number' => $this->getPersonalNumber(),
            'address' => $this->getAddress(),
            'phone_number' => $this->getPhoneNumber(),
            'email' => $this->getEmail(),
            'password' => $this->getPassword(),
        ];
    }

}
