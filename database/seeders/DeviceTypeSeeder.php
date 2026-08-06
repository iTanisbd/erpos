<?php

namespace Database\Seeders;

use App\Models\DeviceType;
use Illuminate\Database\Seeder;

class DeviceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $deviceTypes = [

            [
                'name' => 'Mobile',
                'slug' => 'mobile',
                'description' => 'Smartphones and Feature Phones',
                'sort_order' => 1,
            ],

            [
                'name' => 'Laptop',
                'slug' => 'laptop',
                'description' => 'Laptop Computers',
                'sort_order' => 2,
            ],

            [
                'name' => 'Desktop',
                'slug' => 'desktop',
                'description' => 'Desktop Computers',
                'sort_order' => 3,
            ],

            [
                'name' => 'Tablet',
                'slug' => 'tablet',
                'description' => 'Tablet Devices',
                'sort_order' => 4,
            ],

            [
                'name' => 'Smart Watch',
                'slug' => 'smart-watch',
                'description' => 'Wearable Smart Devices',
                'sort_order' => 5,
            ],

            [
                'name' => 'Printer',
                'slug' => 'printer',
                'description' => 'Printers and Scanners',
                'sort_order' => 6,
            ],

            [
                'name' => 'CCTV',
                'slug' => 'cctv',
                'description' => 'Security Camera Systems',
                'sort_order' => 7,
            ],

            [
                'name' => 'Television',
                'slug' => 'television',
                'description' => 'LED, LCD and Smart TVs',
                'sort_order' => 8,
            ],

            [
                'name' => 'Air Conditioner',
                'slug' => 'air-conditioner',
                'description' => 'Cooling Systems',
                'sort_order' => 9,
            ],

            [
                'name' => 'Game Console',
                'slug' => 'game-console',
                'description' => 'Gaming Consoles',
                'sort_order' => 10,
            ],

        ];

        foreach ($deviceTypes as $deviceType) {

            DeviceType::updateOrCreate(
                [
                    'slug' => $deviceType['slug'],
                ],
                [
                    'name'        => $deviceType['name'],
                    'description' => $deviceType['description'],
                    'status'      => true,
                    'sort_order'  => $deviceType['sort_order'],
                ]
            );

        }
    }
}
