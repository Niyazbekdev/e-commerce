<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $category = Category::create([
            'name' => [
                'kaa' => 'mebel',
                'en' => 'mebel',
            ]
        ]);

        $category->childCategories()->create([
            'name' => [
                'kaa' => 'stol',
                'en' => 'stol'
            ]
        ]);

        $childCategory = $category->childCategories()->create([
            'name' => [
                'kaa' => 'stul',
                'en' => 'chair'
            ]
        ]);

        $childCategory->childCategories()->create([
            'name' => [
                'kaa' => 'oyin stuli',
                'en' => 'game chair'
            ]
        ]);

        $childCategory->childCategories()->create([
            'name' => [
                'kaa' => 'ofis stuli',
                'en' => 'office chair'
            ]
        ]);

        Category::create([
            'name' => [
                'kaa' => 'divan',
                'en' => 'chair',
            ]
        ]);
    }
}
