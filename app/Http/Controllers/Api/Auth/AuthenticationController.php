<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UpdateUserRequest;
use App\Http\Requests\Users\UserLoginRequest;
use App\Http\Requests\Users\UserRegistrationRequest;
use App\Http\Resources\User\UserRegisterResource;
use App\Services\Auth\AuthService;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class AuthenticationController extends Controller
{
    use ApiResponse;

    public function __construct(
        protected AuthService $authService
    ){}

    public function register(UserRegistrationRequest $request): JsonResponse
    {
        $data = $this->authService->register($request);

        return $this->successResponse(
            new UserRegisterResource($data),
            'User registered successfully'
        );
    }

    public function login(UserLoginRequest $request): JsonResponse
    {
        $user = $this->authService->login($request);

        if ($user)
        {
            return $this->successResponse(
                new UserRegisterResource($user),
                'User logged in successfully'
            );
        }

        return $this->errorResponse('Unauthorized', 401);
    }



    public function logout(Request $request): JsonResponse
    {
        $user = $request->user();
        $data = $this->authService->logout($user);

        if ($data)
        {
            return $this->successResponse(
                null,
                'User logged out successfully'
            );
        }

        return $this->errorResponse('Unauthorized', 401);
    }
}
