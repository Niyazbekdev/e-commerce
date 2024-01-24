<?php

namespace Database\Seeders;

use App\Enums\SettingType;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = Setting::create([
            'name' => [
                'kaa' => 'til',
                'en' => 'language',
            ],
            'type' => SettingType::SELECT->value,
        ]);

        $settings->values()->create([
            'name' => [
                'kaa' => 'qaraqalpaqsha',
                'en' => 'karakalpak'
            ]
        ]);

        $settings->values()->create([
            'name' => [
                'kaa' => 'inglizshe',
                'en' => 'english'
            ]
        ]);

        $settings = Setting::create([
            'name' => [
                'kaa' => 'pul birligi',
                'en' => 'money',
            ],
            'type' => SettingType::SELECT->value,
        ]);

        $settings->values()->create([
            'name' => [
                'kaa' => 'swm',
                'en' => 'swm'
            ]
        ]);

        $settings->values()->create([
            'name' => [
                'kaa' => 'dollr',
                'en' => 'dollor'
            ]
        ]);

        $settings = Setting::create([
            'name' => [
                'kaa' => 'qarangi turi',
                'en' => 'dark mode',
            ],
            'type' => SettingType::SWITCH->value,
        ]);

        $settings = Setting::create([
            'name' => [
                'kaa' => 'xabarnama',
                'en' => 'notification',
            ],
            'type' => SettingType::SWITCH->value,
        ]);
    }
}
