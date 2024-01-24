<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    public function run(): void
    {
        $attribute1 = Attribute::find(1);
        $attribute1->values()->create([
            'name' => [
                'kaa' => 'aq',
                'en' => 'red'
            ]
        ]);

        $attribute1->values()->create([
            'name' => [
                'kaa' => 'qara',
                'en' => 'black'
            ]
        ]);

        $attribute2 = Attribute::find(2);

        $attribute2->values()->create([
            'name' => [
                'kaa' => 'MDF',
                'en' => 'MDF'
            ]
        ]);

        $attribute2->values()->create([
            'name' => [
                'kaa' => 'LDSP',
                'en' => 'LDSP'
            ]
        ]);

    }
}
