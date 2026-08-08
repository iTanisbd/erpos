<?php

namespace Database\Factories;

use App\Models\DeviceType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<DeviceType>
 */
class DeviceTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->randomElement([
            'Mobile',
            'Laptop',
            'Desktop',
            'Tablet',
            'Smart Watch',
            'Printer',
            'CCTV',
            'Television',
            'Air Conditioner',
            'Game Console',
        ]);

        return [
            'name' => $name,

            'slug' => Str::slug($name),

            'description' => fake()->optional()->sentence(),

            'status' => true,

            'sort_order' => fake()->numberBetween(1, 100),
        ];
    }
}
