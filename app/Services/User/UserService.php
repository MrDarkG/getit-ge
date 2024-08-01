<?php

namespace App\Services\User;

use App\Models\User;

class UserService
{
    public function getUserById(int $id): User
    {
        return User::find($id);
    }

    public static function getBalanceByUserId(int $id): float
    {
        return (new UserService)->getUserById($id)->getAmount();
    }
}
