<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Result;
use App\Models\User;
use App\Models\Event;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    protected $model = Result::class;

    public function definition()
    {
        return [
            'user_id' => fake()->numberBetween(1, 3),
            'event_id' => fake()->numberBetween(1, 3),
            'finish_time' => fake()->numberBetween(60, 3600) // Random finish time
        ];
    }
}
