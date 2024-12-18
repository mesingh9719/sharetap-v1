<?php

namespace Database\Seeders;

use App\Models\AppFeature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            [
                'name' => 'Share your ShareTap Card',
                'description' => 'Share your business or personal information via SMS, Email, or other methods directly with prospects.',
                'is_active' => true,
            ],
            [
                'name' => 'Scan QR Code',
                'description' => 'Clients can view your details by scanning your QR Code and easily share it with others.',
                'is_active' => true,
            ],
            [
                'name' => 'Social Media Links',
                'description' => 'Clients can follow you on social media, helping you grow your business by sharing your social links.',
                'is_active' => true,
            ],
            [
                'name' => '30+ Customizable Templates',
                'description' => 'Select from over 30 templates for your ShareTap card and customize the design to match your preferences.',
                'is_active' => true,
            ],
            [
                'name' => 'Product and Service Display',
                'description' => 'Showcase your products and services on your personalized portfolio, giving clients a clear view of your offerings.',
                'is_active' => true,
            ],
            [
                'name' => 'Appointment Bookings',
                'description' => 'Allow clients to easily book appointments with you through your portfolio.',
                'is_active' => true,
            ],
            [
                'name' => 'NFC Card Sharing',
                'description' => 'Share your profile effortlessly by tapping your NFC card, giving clients instant access to your details.',
                'is_active' => true,
            ],
        ];
        foreach ($features as $feature) {
            AppFeature::create($feature);
        }
    }
}
