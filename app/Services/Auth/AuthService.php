<?php

namespace App\Services\Auth;

use App\Http\Requests\Users\UpdateUserRequest;
use App\Http\Requests\Users\UserLoginRequest;
use App\Http\Requests\Users\UserRegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    function login(UserLoginRequest $request): ?User
    {
        if(Auth::attempt($request->only('email', 'password')))
        {
            return User::where('email', $request->getEmail())->first();
        }

        return null;
    }

    /**
     * @param UserRegistrationRequest $request
     * @return User
     */
    function register(UserRegistrationRequest $request): User
    {
        return User::createFromArray($request->toArray());
    }

    function logout(User $user): int
    {
        return $user->tokens()->delete();
    }

    public function updateUser(UpdateUserRequest $request, User $user): User
    {
        return $user->updateFromArray($user, $request->toDto());

    }

}
