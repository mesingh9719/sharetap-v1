<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'key' => 'site_name',
                'value' => 'ShareTap',
            ],
            [
                'key' => 'site_logo',
                'value' => 'assets/images/logo/General Website Us/logo resize-04.svg',
            ],
            [
                'key' => 'site_favicon',
                'value' => 'assets/images/logo/Favicons/logo resize-09.svg',
            ],
            [
                'key' => 'site_description',
                'value' => 'ShareTap is a social media platform.',
            ],
            [
                'key' => 'site_keywords',
                'value' => 'social media, sharetap, social network',
            ],
        ];

        foreach ($data as $setting) {
            \App\Models\Setting::create($setting);
        }
    }
}
