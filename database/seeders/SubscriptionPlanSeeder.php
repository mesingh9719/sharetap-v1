<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Basic',
                'price' => '9.99',
                'description' => 'Essential features for small businesses',
                'available_templates' => '5',
                'nfc_cards' => '1',
                'is_appointment_scheduling' => false,
                'is_product_listing' => true,
                'is_service_listing' => true,
                'is_testimonials' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pro',
                'price' => '19.99',
                'description' => 'Advanced features for growing businesses',
                'available_templates' => '10',
                'nfc_cards' => '3',
                'is_appointment_scheduling' => true,
                'is_product_listing' => true,
                'is_service_listing' => true,
                'is_testimonials' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Enterprise',
                'price' => '49.99',
                'description' => 'Full suite of features for large businesses',
                'available_templates' => '20',
                'nfc_cards' => '10',
                'is_appointment_scheduling' => true,
                'is_product_listing' => true,
                'is_service_listing' => true,
                'is_testimonials' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('subscription_plans')->insert($plans);
    }
}
