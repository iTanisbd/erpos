<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\DeviceModel;
use App\Models\DeviceType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<DeviceModel>
 */
class DeviceModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->words(
            fake()->numberBetween(1, 3),
            true
        );

        return [
            'brand_id' => Brand::factory(),

            'device_type_id' => DeviceType::factory(),

            'name' => $name,

            'slug' => Str::slug($name . '-' . fake()->unique()->numberBetween(1, 999999)),

            'description' => fake()->optional()->sentence(),

            'status' => true,

            'sort_order' => fake()->numberBetween(1, 100),
        ];
    }
}
