<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'event_name' => fake()->name(),
            // 'description' => fake()->text(),
            // 'start_date' => fake()->date(),
            // 'end_date' => fake()->dateTimeThisMonth(),
        ];
    }
}
