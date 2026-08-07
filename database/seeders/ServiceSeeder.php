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

                [
                    'name' => 'Display Replacement',
                    'description' => 'Replace damaged LCD/OLED display.',
                    'default_price' => 1500,
                    'minimum_price' => 1200,
                    'estimated_minutes' => 60,
                    'requires_parts' => true,
                    'warranty_enabled' => true,
                    'warranty_days' => 30,
                ],

                [
                    'name' => 'Touch Glass Replacement',
                    'description' => 'Replace damaged touch glass.',
                    'default_price' => 1200,
                    'minimum_price' => 900,
                    'estimated_minutes' => 60,
                    'requires_parts' => true,
                    'warranty_enabled' => true,
                    'warranty_days' => 30,
                ],

                [
                    'name' => 'Battery Replacement',
                    'description' => 'Replace damaged battery.',
                    'default_price' => 800,
                    'minimum_price' => 600,
                    'estimated_minutes' => 30,
                    'requires_parts' => true,
                    'warranty_enabled' => true,
                    'warranty_days' => 30,
                ],

                [
                    'name' => 'Charging Port Replacement',
                    'description' => 'Replace charging connector.',
                    'default_price' => 700,
                    'minimum_price' => 500,
                    'estimated_minutes' => 45,
                    'requires_parts' => true,
                    'warranty_enabled' => true,
                    'warranty_days' => 30,
                ],

                [
                    'name' => 'Speaker Replacement',
                    'description' => 'Replace loudspeaker.',
                    'default_price' => 600,
                    'minimum_price' => 450,
                    'estimated_minutes' => 30,
                    'requires_parts' => true,
                    'warranty_enabled' => true,
                    'warranty_days' => 30,
                ],

                [
                    'name' => 'Microphone Replacement',
                    'description' => 'Replace microphone.',
                    'default_price' => 600,
                    'minimum_price' => 450,
                    'estimated_minutes' => 30,
                    'requires_parts' => true,
                    'warranty_enabled' => true,
                    'warranty_days' => 30,
                ],

                [
                    'name' => 'Camera Replacement',
                    'description' => 'Replace front or rear camera.',
                    'default_price' => 1200,
                    'minimum_price' => 900,
                    'estimated_minutes' => 45,
                    'requires_parts' => true,
                    'warranty_enabled' => true,
                    'warranty_days' => 30,
                ],

                [
                    'name' => 'Back Glass Replacement',
                    'description' => 'Replace damaged back glass.',
                    'default_price' => 1000,
                    'minimum_price' => 800,
                    'estimated_minutes' => 60,
                    'requires_parts' => true,
                    'warranty_enabled' => true,
                    'warranty_days' => 30,
                ],

                [
                    'name' => 'Power Button Repair',
                    'description' => 'Repair power button.',
                    'default_price' => 500,
                    'minimum_price' => 350,
                    'estimated_minutes' => 30,
                    'requires_parts' => true,
                    'warranty_enabled' => true,
                    'warranty_days' => 15,
                ],

                [
                    'name' => 'Volume Button Repair',
                    'description' => 'Repair volume button.',
                    'default_price' => 500,
                    'minimum_price' => 350,
                    'estimated_minutes' => 30,
                    'requires_parts' => true,
                    'warranty_enabled' => true,
                    'warranty_days' => 15,
                ],

                [
                    'name' => 'Motherboard Repair',
                    'description' => 'Repair motherboard circuit.',
                    'default_price' => 3000,
                    'minimum_price' => 1800,
                    'estimated_minutes' => 180,
                    'requires_parts' => true,
                    'warranty_enabled' => true,
                    'warranty_days' => 30,
                ],

                [
                    'name' => 'IC Replacement',
                    'description' => 'Replace faulty IC.',
                    'default_price' => 1800,
                    'minimum_price' => 1200,
                    'estimated_minutes' => 90,
                    'requires_parts' => true,
                    'warranty_enabled' => true,
                    'warranty_days' => 30,
                ],

                [
                    'name' => 'CPU Reball',
                    'description' => 'CPU reballing service.',
                    'default_price' => 3500,
                    'minimum_price' => 2500,
                    'estimated_minutes' => 240,
                    'requires_parts' => false,
                    'warranty_enabled' => true,
                    'warranty_days' => 30,
                ],

                [
                    'name' => 'Fingerprint Repair',
                    'description' => 'Repair fingerprint sensor.',
                    'default_price' => 1200,
                    'minimum_price' => 900,
                    'estimated_minutes' => 45,
                    'requires_parts' => true,
                    'warranty_enabled' => true,
                    'warranty_days' => 30,
                ],

                [
                    'name' => 'Face ID Repair',
                    'description' => 'Repair Face ID module.',
                    'default_price' => 3500,
                    'minimum_price' => 2500,
                    'estimated_minutes' => 120,
                    'requires_parts' => true,
                    'warranty_enabled' => true,
                    'warranty_days' => 30,
                ],

            ],

            'Software Service' => [

                [
                    'name' => 'Firmware Flash',
                    'description' => 'Install or reflash official firmware.',
                    'default_price' => 500,
                    'minimum_price' => 350,
                    'estimated_minutes' => 30,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'Android Flash',
                    'description' => 'Flash Android firmware.',
                    'default_price' => 600,
                    'minimum_price' => 400,
                    'estimated_minutes' => 30,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'Software Update',
                    'description' => 'Update device operating system.',
                    'default_price' => 300,
                    'minimum_price' => 200,
                    'estimated_minutes' => 20,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'Data Backup',
                    'description' => 'Backup customer data safely.',
                    'default_price' => 400,
                    'minimum_price' => 250,
                    'estimated_minutes' => 20,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'Data Recovery',
                    'description' => 'Recover deleted or inaccessible data.',
                    'default_price' => 1500,
                    'minimum_price' => 1000,
                    'estimated_minutes' => 90,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'Bootloader Unlock',
                    'description' => 'Unlock device bootloader.',
                    'default_price' => 800,
                    'minimum_price' => 600,
                    'estimated_minutes' => 30,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'Root Service',
                    'description' => 'Root Android device.',
                    'default_price' => 500,
                    'minimum_price' => 350,
                    'estimated_minutes' => 25,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'Software Optimization',
                    'description' => 'Optimize device performance.',
                    'default_price' => 300,
                    'minimum_price' => 200,
                    'estimated_minutes' => 20,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

            ],

            'Unlock Service' => [

                [
                    'name' => 'FRP Unlock',
                    'description' => 'Remove Google Factory Reset Protection.',
                    'default_price' => 700,
                    'minimum_price' => 500,
                    'estimated_minutes' => 30,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'FRP Permanent Unlock',
                    'description' => 'Permanent FRP removal.',
                    'default_price' => 1500,
                    'minimum_price' => 1200,
                    'estimated_minutes' => 60,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'Mi Account Unlock',
                    'description' => 'Remove Xiaomi account lock.',
                    'default_price' => 1200,
                    'minimum_price' => 900,
                    'estimated_minutes' => 45,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'Mi Account Permanent',
                    'description' => 'Permanent Xiaomi account removal.',
                    'default_price' => 2500,
                    'minimum_price' => 1800,
                    'estimated_minutes' => 60,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'Samsung KG Unlock',
                    'description' => 'Remove Samsung Knox Guard lock.',
                    'default_price' => 1500,
                    'minimum_price' => 1200,
                    'estimated_minutes' => 45,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'MDM Unlock',
                    'description' => 'Remove MDM lock.',
                    'default_price' => 1200,
                    'minimum_price' => 900,
                    'estimated_minutes' => 45,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'Network Unlock',
                    'description' => 'Unlock carrier network restriction.',
                    'default_price' => 1000,
                    'minimum_price' => 700,
                    'estimated_minutes' => 45,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'iCloud Bypass',
                    'description' => 'Perform iCloud bypass service.',
                    'default_price' => 3000,
                    'minimum_price' => 2500,
                    'estimated_minutes' => 90,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

            ],

            'Cleaning Service' => [

                [
                    'name' => 'Water Damage Cleaning',
                    'description' => 'Clean water damaged device.',
                    'default_price' => 800,
                    'minimum_price' => 600,
                    'estimated_minutes' => 45,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'Internal Cleaning',
                    'description' => 'Clean internal dust and dirt.',
                    'default_price' => 300,
                    'minimum_price' => 200,
                    'estimated_minutes' => 20,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'Motherboard Cleaning',
                    'description' => 'Clean motherboard corrosion.',
                    'default_price' => 600,
                    'minimum_price' => 450,
                    'estimated_minutes' => 45,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

            ],

            'Diagnostic Service' => [

                [
                    'name' => 'Complete Diagnosis',
                    'description' => 'Complete hardware and software inspection.',
                    'default_price' => 300,
                    'minimum_price' => 200,
                    'estimated_minutes' => 20,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'Hardware Diagnosis',
                    'description' => 'Identify hardware related faults.',
                    'default_price' => 250,
                    'minimum_price' => 150,
                    'estimated_minutes' => 20,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'Software Diagnosis',
                    'description' => 'Identify software related faults.',
                    'default_price' => 250,
                    'minimum_price' => 150,
                    'estimated_minutes' => 20,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

                [
                    'name' => 'Power Consumption Test',
                    'description' => 'Measure device power consumption.',
                    'default_price' => 400,
                    'minimum_price' => 250,
                    'estimated_minutes' => 30,
                    'requires_parts' => false,
                    'warranty_enabled' => false,
                    'warranty_days' => 0,
                ],

            ],

        ];

        foreach ($services as $category => $items) {

            foreach ($items as $service) {

                $slug = Str::slug(
                    $category . '-' . $service['name']
                );

                Service::updateOrCreate(

                    [
                        'slug' => $slug,
                    ],

                    [
                        'code' => 'SRV-' . str_pad($counter++, 4, '0', STR_PAD_LEFT),

                        'category' => $category,

                        'name' => $service['name'],

                        'slug' => $slug,

                        'description' => $service['description'],

                        'default_price' => $service['default_price'],

                        'minimum_price' => $service['minimum_price'],

                        'estimated_minutes' => $service['estimated_minutes'],

                        'requires_parts' => $service['requires_parts'],

                        'warranty_enabled' => $service['warranty_enabled'],

                        'warranty_days' => $service['warranty_days'],

                        'status' => true,

                        'sort_order' => 0,
                    ]

                );

            }

        }
    }
}
