<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\DeviceType;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [

            [
                'name' => 'Samsung',
                'slug' => 'samsung',
                'description' => 'Samsung Electronics',
                'sort_order' => 1,
                'device_types' => [
                    'mobile',
                    'tablet',
                    'smart-watch',
                    'television',
                    'air-conditioner',
                ],
            ],

            [
                'name' => 'Apple',
                'slug' => 'apple',
                'description' => 'Apple Inc.',
                'sort_order' => 2,
                'device_types' => [
                    'mobile',
                    'tablet',
                    'laptop',
                    'smart-watch',
                ],
            ],

            [
                'name' => 'Dell',
                'slug' => 'dell',
                'description' => 'Dell Technologies',
                'sort_order' => 3,
                'device_types' => [
                    'laptop',
                    'desktop',
                ],
            ],

            [
                'name' => 'HP',
                'slug' => 'hp',
                'description' => 'HP Inc.',
                'sort_order' => 4,
                'device_types' => [
                    'laptop',
                    'desktop',
                    'printer',
                ],
            ],

            [
                'name' => 'Canon',
                'slug' => 'canon',
                'description' => 'Canon Inc.',
                'sort_order' => 5,
                'device_types' => [
                    'printer',
                ],
            ],

            [
                'name' => 'Sony',
                'slug' => 'sony',
                'description' => 'Sony Corporation',
                'sort_order' => 6,
                'device_types' => [
                    'television',
                    'game-console',
                ],
            ],

        ];

        foreach ($brands as $item) {

            $brand = Brand::updateOrCreate(
                [
                    'slug' => $item['slug'],
                ],
                [
                    'name'        => $item['name'],
                    'description' => $item['description'],
                    'status'      => true,
                    'sort_order'  => $item['sort_order'],
                ]
            );

            $deviceTypeIds = DeviceType::whereIn(
                'slug',
                $item['device_types']
            )->pluck('id');

            $brand->deviceTypes()->sync($deviceTypeIds);
        }
    }
}
