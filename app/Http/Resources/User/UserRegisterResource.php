<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


/**
 * @method string getName()
 * @method string getSurname()
 * @method string getPersonalNumber()
 * @method string getAddress()
 * @method string getPhoneNumber()
 * @method string getEmail()
 * @method createToken(string $string)
 */
class UserRegisterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->getName(),
            'surname' => $this->getSurname(),
            'personal_number' => $this->getPersonalNumber(),
            'address' => $this->getAddress(),
            'phone_number' => $this->getPhoneNumber(),
            'email' => $this->getEmail(),
            'token' => $this->createToken('token')->plainTextToken,
        ];
    }
}
