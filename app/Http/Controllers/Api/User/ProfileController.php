<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UpdateUserRequest;
use App\Http\Resources\User\UserRegisterResource;
use App\Services\Auth\AuthService;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    use ApiResponse;

    public function __construct(protected AuthService $authService)
    {}
    public function index(Request $request): JsonResponse
    {
        return $this->successResponse(
            new UserRegisterResource($request->user()),
            'User profile retrieved successfully'
        );
    }

    public function updateUser(UpdateUserRequest $request): JsonResponse
    {
        $user = $request->user();
        $data = $this->authService->updateUser($request, $user);

        return $this->successResponse(
            new UserRegisterResource($data),
            'User updated successfully'
        );
    }
}
