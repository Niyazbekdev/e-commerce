<?php

namespace Database\Seeders;

use App\Models\UserAddress;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{
    public function run(): void
    {
        UserAddress::create([
            'user_id' => 1,
            'latitude' => '3838.8383',
            'longitude' => '383.383',
            'region' => 'tashkent',
            'district' => 'olmaliq',
            'street' => 'navoi',
            'home' => '83e uy'
        ]);
    }
}
