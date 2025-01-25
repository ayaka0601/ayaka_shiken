<?php

namespace Database\Factories;

use App\Models\WeightLog;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = WeightLog::class;

    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigit(),
            'date' => $this->faker->dateTimeBetween($startDate = '-3 week', $endDate = '+2 week'),
            'weight' => $this->faker->randomFloat(1, 50, 52),
            'calories' => $this->faker->numberBetween(1200, 1300),
            'exercise_time' => $this->faker->time('H:i'),
            'exercise_content' => $this->faker->realText(120),
        ];
    }
}
