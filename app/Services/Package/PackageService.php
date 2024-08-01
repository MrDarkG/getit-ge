<?php

namespace App\Services\Package;

use App\Models\Package;
use App\Models\User;
use Illuminate\Support\Collection;

class PackageService
{
    public function getPackage(int $packageId): Package
    {
        return Package::find($packageId);
    }

    public function getUserPackages(User $userId): Collection
    {
        return Package::where('user_id', $userId->getId())->get();
    }

    public function getPayedPackagesWithUserId(User $userId)
    {
        return Package::where([
            'payment_status' => 'paid',
            'user_id' => $userId->getId()
            ])->get();
    }

    public function createPackage(array $data): Package|int
    {
//        return Package::create($data);
        return 1;
    }

    public function updatePackage(Package $package, array $data): Package
    {
//        $package->update($data);
        return $package;
    }

    public function deletePackage(Package $package): int
    {
        return $package->delete();
    }

    public function updatePaymentStatus(Package $package, string $status): Package
    {
        $package->setPaymentStatus($status);
        $package->save();
        return $package;
    }


}
