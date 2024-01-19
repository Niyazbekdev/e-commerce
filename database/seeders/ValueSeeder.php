<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    public function run(): void
    {
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'kaa' => 'aq',
                'en' => 'red'
            ]
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
                'kaa' => 'qara',
                'en' => 'black'
            ]
        ]);

        Value::create([
            'attribute_id' => 2,
            'name' => [
                'kaa' => 'MDF',
                'en' => 'MDF'
            ]
        ]);

        Value::create([
            'attribute_id' => 2,
            'name' => [
                'kaa' => 'LDSP',
                'en' => 'LDSP'
            ]
        ]);

    }
}
