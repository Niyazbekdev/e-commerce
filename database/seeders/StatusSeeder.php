<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run(): void
    {
        Status::create([
            'name' => [
                'kaa' => 'jana',
                'en' => 'new'
            ],
            'code' => 'new',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'kaa' => 'tastiyiqlangan',
                'en' => 'confirmed'
            ],
            'code' => 'confirmed',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'kaa' => 'orinlanip atir',
                'en' => 'processing'
            ],
            'code' => 'processing',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'kaa' => 'jetkizilip atir (jolda)',
                'en' => 'shipped'
            ],
            'code' => 'shipping',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'kaa' => 'jetkizip berildi',
                'en' => 'delivered'
            ],
            'code' => 'delivered',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'kaa' => 'toqtatildi',
                'en' => 'completed'
            ],
            'code' => 'completed',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'kaa' => 'biykar qilindi',
                'en' => 'canceled'
            ],
            'code' => 'canceled',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'kaa' => 'qaytarip berildi',
                'en' => 'refunded'
            ],
            'code' => 'refunded',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'kaa' => 'jawildi',
                'en' => 'closed'
            ],
            'code' => 'closed',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'kaa' => 'Tolem kutilip atir',
                'en' => 'waiting payment'
            ],
            'code' => 'waiting_payment',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'kaa' => 'tolendi',
                'en' => 'accepted'
            ],
            'code' => 'paid',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'kaa' => 'tolewde qate ketti',
                'en' => 'payment error'
            ],
            'code' => 'payment_error',
            'for' => 'order'
        ]);
    }
}
