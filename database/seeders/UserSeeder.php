<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'first_name' => 'Anvar',
            'last_name' => 'Sagindikov',
            'email' => 'anvar@example.com',
            'phone' => '+998902393829',
            'password' => Hash::make('123')
        ]);

        $admin->roles()->attach(1);

        User::factory()->count(5)->hasAttached(Role::find(2))->create();
    }
}
