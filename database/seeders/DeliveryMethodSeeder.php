<?php

namespace Database\Seeders;

use App\Models\DeliveryMethod;
use Illuminate\Database\Seeder;

class DeliveryMethodSeeder extends Seeder
{
    public function run(): void
    {
        DeliveryMethod::create([
            'name' => [
                'kaa' => 'tegin',
                'en' => 'free'
            ],
            'estimated_time' => [
                'kaa' => '7 kun',
                'en' => '7 day'
            ],
            'sum' => 0
        ]);

        DeliveryMethod::create([
            'name' => [
                'kaa' => 'standart',
                'en' => 'default'
            ],
            'estimated_time' => [
                'kaa' => '3 kun',
                'en' => '3 day'
            ],
            'sum' => 50000
        ]);

        DeliveryMethod::create([
            'name' => [
                'kaa' => 'tez',
                'en' => 'flash'
            ],
            'estimated_time' => [
                'kaa' => '1 kun',
                'en' => '1 day'
            ],
            'sum' => 90000
        ]);
    }
}
