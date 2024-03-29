<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    public function run(): void
    {
        Attribute::create([
            'name' => 'color'
        ]);

        Attribute::create([
            'name' => 'material'
        ]);

        Attribute::create([
            'name' => 'size'
        ]);
    }
}
