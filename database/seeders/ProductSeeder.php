<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = Product::factory()->count(15)->create();

        foreach ($products as $product){
            $product->stocks()->create([
                'quantity' => rand(20,40),
                'attributes' => json_encode([
                    [
                        'attribute_id' => 1,
                        'value_id' => rand(1,2),
                    ],
                    [
                        'attribute_id' => 2,
                        'value_id' => rand(3,4),
                    ]
                ])
            ]);

            $product->stocks()->create([
                'quantity' => rand(20,40),
                'attributes' => json_encode([
                    [
                        'attribute_id' => 1,
                        'value_id' => rand(1,2),
                    ],
                    [
                        'attribute_id' => 2,
                        'value_id' => rand(3,4),
                    ]
                ])
            ]);
        }
    }
}
