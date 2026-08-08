<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\DeviceModel;
use App\Models\DeviceType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DeviceModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = [

            'samsung' => [
                'device_type' => 'mobile',
                'models' => [
                    'Galaxy S24 Ultra',
                    'Galaxy S24',
                    'Galaxy A56',
                    'Galaxy M35',
                ],
            ],

            'apple' => [
                'device_type' => null,

                'models' => [
                    [
                        'name' => 'iPhone 16 Pro Max',
                        'device_type' => 'mobile',
                    ],
                    [
                        'name' => 'iPhone 16 Pro',
                        'device_type' => 'mobile',
                    ],
                    [
                        'name' => 'iPhone 15',
                        'device_type' => 'mobile',
                    ],
                    [
                        'name' => 'iPad Pro M4',
                        'device_type' => 'tablet',
                    ],
                    [
                        'name' => 'MacBook Air M3',
                        'device_type' => 'laptop',
                    ],
                ],
            ],

            'dell' => [
                'device_type' => 'laptop',
                'models' => [
                    'Latitude 7450',
                    'Latitude 5440',
                    'Inspiron 15',
                    'XPS 13',
                ],
            ],

            'hp' => [
                'device_type' => null,

                'models' => [
                    [
                        'name' => 'EliteBook 840',
                        'device_type' => 'laptop',
                    ],
                    [
                        'name' => 'ProBook 450',
                        'device_type' => 'laptop',
                    ],
                    [
                        'name' => 'LaserJet Pro M404',
                        'device_type' => 'printer',
                    ],
                ],
            ],

            'canon' => [
                'device_type' => 'printer',
                'models' => [
                    'PIXMA G3010',
                    'imageCLASS MF3010',
                ],
            ],

            'sony' => [
                'device_type' => null,

                'models' => [
                    [
                        'name' => 'PlayStation 5',
                        'device_type' => 'game-console',
                    ],
                    [
                        'name' => 'Bravia X90L',
                        'device_type' => 'television',
                    ],
                ],
            ],

        ];

        foreach ($models as $brandSlug => $brandData) {

            $brand = Brand::where('slug', $brandSlug)->first();

            if (! $brand) {
                continue;
            }

            foreach ($brandData['models'] as $index => $model) {

                if (is_string($model)) {
                    $modelName = $model;
                    $deviceTypeSlug = $brandData['device_type'];
                } else {
                    $modelName = $model['name'];
                    $deviceTypeSlug = $model['device_type'];
                }

                $deviceType = DeviceType::where(
                    'slug',
                    $deviceTypeSlug
                )->first();

                if (! $deviceType) {
                    continue;
                }

                DeviceModel::updateOrCreate(

                    [
                        'slug' => Str::slug(
                            $brandSlug . '-' . $modelName
                        ),
                    ],

                    [
                        'brand_id' => $brand->id,

                        'device_type_id' => $deviceType->id,

                        'name' => $modelName,

                        'description' => null,

                        'status' => true,

                        'sort_order' => $index + 1,
                    ]

                );

            }

        }
    }
}
