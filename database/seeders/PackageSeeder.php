<?php

namespace Database\Seeders;

use App\Models\Package;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = new Status();
        $status->setName('Status');
        $status->save();
        $user = User::find(1);
        $package = new Package();
        $package->setUserId($user);
        $package->setSendNumber('123456');
        $package->setTracking('123456');
        $package->setLocation('Location');
        $package->setWeight(1.5);
        $package->setPrice(100.0);
        $package->setInsertDate(now());
        $package->setTariff(0.8);
        $package->setStatusId($status);
        $package->setTitle('Title');
        $package->setSite('Site');
        $package->setPaymentStatus('unpaid');
        $package->setAPrice(100.0);
        $package->setGetDate(now());
        $package->save();
    }
}
