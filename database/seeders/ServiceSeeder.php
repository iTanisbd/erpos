<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $counter = 1;

        $services = [

            'Hardware Service' => [

                ['name' => 'Display Replacement',       'price' => 1500, 'minutes' => 60, 'parts' => true],
                ['name' => 'Battery Replacement',       'price' => 800,  'minutes' => 30, 'parts' => true],
                ['name' => 'Charging Port Replacement', 'price' => 700,  'minutes' => 45, 'parts' => true],
                ['name' => 'Speaker Replacement',       'price' => 600,  'minutes' => 30, 'parts' => true],
                ['name' => 'Microphone Replacement',    'price' => 600,  'minutes' => 30, 'parts' => true],
                ['name' => 'Camera Replacement',        'price' => 1200, 'minutes' => 45, 'parts' => true],
                ['name' => 'Back Glass Replacement',    'price' => 1000, 'minutes' => 60, 'parts' => true],
                ['name' => 'Power Button Repair',       'price' => 500,  'minutes' => 30, 'parts' => true],
                ['name' => 'Volume Button Repair',      'price' => 500,  'minutes' => 30, 'parts' => true],
                ['name' => 'Motherboard Repair',        'price' => 3000, 'minutes' => 180,'parts' => true],

            ],

            'Software Service' => [

                ['name' => 'Firmware Flash',            'price' => 500,  'minutes' => 30, 'parts' => false],
                ['name' => 'Android Flash',             'price' => 600,  'minutes' => 30, 'parts' => false],
                ['name' => 'Software Update',           'price' => 300,  'minutes' => 20, 'parts' => false],
                ['name' => 'Data Backup',               'price' => 400,  'minutes' => 20, 'parts' => false],
                ['name' => 'Data Recovery',             'price' => 1500, 'minutes' => 90, 'parts' => false],
                ['name' => 'Bootloader Unlock',         'price' => 800,  'minutes' => 30, 'parts' => false],
                ['name' => 'Root Service',              'price' => 500,  'minutes' => 25, 'parts' => false],
                ['name' => 'Software Optimization',     'price' => 300,  'minutes' => 20, 'parts' => false],

            ],

            'Unlock Service' => [

                ['name' => 'FRP Unlock',                'price' => 700,  'minutes' => 30, 'parts' => false],
                ['name' => 'FRP Permanent Unlock',      'price' => 1500, 'minutes' => 60, 'parts' => false],
                ['name' => 'Mi Account Unlock',         'price' => 1200, 'minutes' => 45, 'parts' => false],
                ['name' => 'Mi Account Permanent',      'price' => 2500, 'minutes' => 60, 'parts' => false],
                ['name' => 'Samsung KG Unlock',         'price' => 1500, 'minutes' => 45, 'parts' => false],
                ['name' => 'MDM Unlock',                'price' => 1200, 'minutes' => 45, 'parts' => false],
                ['name' => 'Network Unlock',            'price' => 1000, 'minutes' => 45, 'parts' => false],
                ['name' => 'iCloud Bypass',             'price' => 3000, 'minutes' => 90, 'parts' => false],

            ],

            'Cleaning Service' => [

                ['name' => 'Water Damage Cleaning',     'price' => 800,  'minutes' => 45, 'parts' => false],
                ['name' => 'Internal Cleaning',         'price' => 300,  'minutes' => 20, 'parts' => false],
                ['name' => 'Motherboard Cleaning',      'price' => 600,  'minutes' => 45, 'parts' => false],

            ],

            'Diagnostic Service' => [

                ['name' => 'Complete Diagnosis',        'price' => 300,  'minutes' => 20, 'parts' => false],
                ['name' => 'Hardware Diagnosis',        'price' => 250,  'minutes' => 20, 'parts' => false],
                ['name' => 'Software Diagnosis',        'price' => 250,  'minutes' => 20, 'parts' => false],
                ['name' => 'Power Consumption Test',    'price' => 400,  'minutes' => 30, 'parts' => false],

            ],

        ];

        foreach ($services as $category => $items) {

            foreach ($items as $service) {

                Service::updateOrCreate(

                    [
                        'slug' => Str::slug($service['name']),
                    ],

                    [
                        'code'               => 'SRV-' . str_pad($counter++, 4, '0', STR_PAD_LEFT),
                        'category'           => $category,
                        'name'               => $service['name'],
                        'slug'               => Str::slug($service['name']),
                        'description'        => null,
                        'default_price'      => $service['price'],
                        'minimum_price'      => 0,
                        'estimated_minutes'  => $service['minutes'],
                        'requires_parts'     => $service['parts'],
                        'warranty_enabled'   => false,
                        'warranty_days'      => 0,
                        'status'             => true,
                        'sort_order'         => 0,
                    ]

                );

            }

        }
    }
}
