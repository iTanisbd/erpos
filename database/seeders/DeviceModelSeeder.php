<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\DeviceModel;
use Illuminate\Database\Seeder;

class DeviceModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = [

            'samsung' => [
                'Galaxy S24 Ultra',
                'Galaxy S24',
                'Galaxy A56',
                'Galaxy M35',
            ],

            'apple' => [
                'iPhone 16 Pro Max',
                'iPhone 16 Pro',
                'iPhone 15',
                'iPad Pro M4',
                'MacBook Air M3',
            ],

            'dell' => [
                'Latitude 7450',
                'Latitude 5440',
                'Inspiron 15',
                'XPS 13',
            ],

            'hp' => [
                'EliteBook 840',
                'ProBook 450',
                'LaserJet Pro M404',
            ],

            'canon' => [
                'PIXMA G3010',
                'imageCLASS MF3010',
            ],

            'sony' => [
                'PlayStation 5',
                'Bravia X90L',
            ],

        ];

        foreach ($models as $brandSlug => $deviceModels) {

            $brand = Brand::where('slug', $brandSlug)->first();

            if (! $brand) {
                continue;
            }

            foreach ($deviceModels as $index => $modelName) {

                DeviceModel::updateOrCreate(

                    [
                        'slug' => \Illuminate\Support\Str::slug($modelName),
                    ],

                    [
                        'brand_id' => $brand->id,
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
