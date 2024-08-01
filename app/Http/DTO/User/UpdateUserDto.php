<?php

namespace App\Http\DTO\User;

use Spatie\LaravelData\Data;

class UpdateUserDto extends Data
{
    public function __construct(
        public ?string $name,
        public ?string $surname,
        public ?string $personal_number,
        public ?string $address,
        public ?string $phone_number,
        public ?string $email,
        public ?string $password,
    ) {
        return $this;
    }

    public function execute(): self
    {
        return $this;
    }

}
