<?php

namespace Database\Seeders;

use App\Models\PaymentType;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    public function run(): void
    {
        PaymentType::create([
            'name' => [
                'kaa' => 'naq',
                'en' => 'nak'
            ]
        ]);

        PaymentType::create([
            'name' => [
                'kaa' => 'terminal',
                'en' => 'terminal'
            ]
        ]);

        PaymentType::create([
            'name' => [
                'kaa' => 'click',
                'en' => 'click'
            ]
        ]);

        PaymentType::create([
            'name' => [
                'kaa' => 'payme',
                'en' => 'payme'
            ]
        ]);
    }
}
