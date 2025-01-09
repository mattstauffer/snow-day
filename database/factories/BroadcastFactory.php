<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Broadcast>
 */
class BroadcastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'school_district' => $district = fake()->company(),
            'canceled' => fake()->boolean(),
            'date' => now()->addDays(rand(0, 3)),
            'shortname' => Str::slug($district),
        ];
    }
}
