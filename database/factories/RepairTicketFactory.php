<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Customer;
use App\Models\DeviceModel;
use App\Models\DeviceType;
use App\Models\RepairTicket;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<RepairTicket>
 */
class RepairTicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::factory(),

            'ticket_number' => 'TKT-' . strtoupper(
                Str::random(8)
            ),

            'device_type_id' => DeviceType::factory(),

            'brand_id' => Brand::factory(),

            'device_model_id' => DeviceModel::factory(),

            'device_name' => fake()->words(2, true),

            'imei_1' => fake()->numerify('###############'),

            'imei_2' => fake()->optional()->numerify('###############'),

            'serial_number' => strtoupper(
                fake()->bothify('SN-##########')
            ),

            'color' => fake()->randomElement([
                'Black',
                'White',
                'Blue',
                'Green',
                'Red',
                'Silver',
            ]),

            'password' => null,

            'estimated_delivery_at' => fake()->dateTimeBetween(
                'now',
                '+7 days'
            ),

            'notes' => fake()->optional()->sentence(),

            'status' => true,
        ];
    }
}
