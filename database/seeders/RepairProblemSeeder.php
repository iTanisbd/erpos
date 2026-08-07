<?php

namespace Database\Seeders;

use App\Models\DeviceType;
use App\Models\RepairProblem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RepairProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $counter = 1;

    $repairProblems = [

        'Mobile' => [

            'Hardware Repair' => [

                [
                    'name' => 'Display Issue',
                    'description' => 'Screen damaged, broken, no display or touch problem.',
                ],

                [
                    'name' => 'Battery Issue',
                    'description' => 'Battery draining, swollen or not charging properly.',
                ],

                [
                    'name' => 'Charging Issue',
                    'description' => 'Charging port damaged or charging not working.',
                ],

                [
                    'name' => 'Speaker Issue',
                    'description' => 'Speaker sound low or not working.',
                ],

                [
                    'name' => 'Microphone Issue',
                    'description' => 'Microphone not working properly.',
                ],

                [
                    'name' => 'Camera Issue',
                    'description' => 'Front or rear camera malfunction.',
                ],

                [
                    'name' => 'Network Issue',
                    'description' => 'No network, weak signal or SIM detection issue.',
                ],

                [
                    'name' => 'Water Damage',
                    'description' => 'Liquid damaged device.',
                ],

            ],

            'Software Repair' => [

                [
                    'name' => 'Boot Loop',
                    'description' => 'Device stuck on boot logo.',
                ],

                [
                    'name' => 'System Crash',
                    'description' => 'Android system corrupted.',
                ],

                [
                    'name' => 'App Crash',
                    'description' => 'Applications stop unexpectedly.',
                ],

                [
                    'name' => 'Virus Infection',
                    'description' => 'Malware or virus affected device.',
                ],

                [
                    'name' => 'Slow Performance',
                    'description' => 'Device is running very slowly.',
                ],

                [
                    'name' => 'Auto Restart',
                    'description' => 'Device restarts automatically.',
                ],

                [
                    'name' => 'System Update Failed',
                    'description' => 'Operating system update failed.',
                ],

                [
                    'name' => 'Application Installation Failed',
                    'description' => 'Unable to install applications.',
                ],

                [
                    'name' => 'Storage Full',
                    'description' => 'Internal storage is full or corrupted.',
                ],

            ],

            'Unlock & Security' => [

                [
                    'name' => 'FRP Locked',
                    'description' => 'Google Factory Reset Protection lock.',
                ],

                [
                    'name' => 'Mi Account Locked',
                    'description' => 'Xiaomi account lock.',
                ],

                [
                    'name' => 'Samsung KG Locked',
                    'description' => 'Samsung Knox Guard lock.',
                ],

                [
                    'name' => 'MDM Locked',
                    'description' => 'Mobile Device Management lock.',
                ],

                [
                    'name' => 'Network Locked',
                    'description' => 'Carrier or network locked.',
                ],

            ],

            'Firmware & Flash' => [

                [
                    'name' => 'Firmware Corrupted',
                    'description' => 'Firmware damaged or corrupted.',
                ],

                [
                    'name' => 'Bootloader Locked',
                    'description' => 'Bootloader locked.',
                ],

                [
                    'name' => 'Recovery Mode Issue',
                    'description' => 'Recovery mode not working.',
                ],

                [
                    'name' => 'Fastboot Issue',
                    'description' => 'Fastboot mode problem.',
                ],

            ],

            'Diagnostic' => [

                [
                    'name' => 'Dead Phone',
                    'description' => 'Phone does not power on.',
                ],

                [
                    'name' => 'No Power',
                    'description' => 'Device completely unresponsive.',
                ],

                [
                    'name' => 'Heating Issue',
                    'description' => 'Device overheating.',
                ],

                [
                    'name' => 'Unknown Issue',
                    'description' => 'Problem not identified yet.',
                ],

            ],

        ],

    ];

        foreach ($repairProblems as $deviceTypeName => $categories) {

            $deviceType = DeviceType::where('name', $deviceTypeName)->first();

            if (! $deviceType) {
                continue;
            }

            foreach ($categories as $category => $problems) {

                foreach ($problems as $problem) {

                    RepairProblem::updateOrCreate(

                        [
                            'slug' => Str::slug(
                                $deviceTypeName . '-' . $problem['name']
                            ),
                        ],

                        [
                            'device_type_id' => $deviceType->id,
                            'category'       => $category,
                            'code'           => 'RP-' . str_pad($counter++, 4, '0', STR_PAD_LEFT),
                            'name'           => $problem['name'],
                            'slug'           => Str::slug(
                                $deviceTypeName . '-' . $problem['name']
                            ),
                            'description'    => $problem['description'],
                            'status'         => true,
                            'sort_order'     => 0,
                        ]

                    );

                }

            }

        }

    }
}
