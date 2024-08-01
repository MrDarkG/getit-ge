<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Services\Package\PackageService;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    use ApiResponse;

    public function __construct(protected PackageService $packageService)
    {}

    public function index(Request $request): JsonResponse
    {
        $user = $request->user();
        $packages = $this->packageService->getUserPackages($user);
        return $this->successResponse($packages, 'Packages retrieved successfully');
    }

    public function packagesByPaymentStatus(Request $request): JsonResponse
    {
        $user = $request->user();
        $packages = $this->packageService->getPayedPackagesWithUserId($user);
        return $this->successResponse($packages, 'Packages retrieved successfully');
    }
}
