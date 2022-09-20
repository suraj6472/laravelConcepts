<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'description' => $this->faker->text($maxNbChars = 200),
            'user_id' => User::where('is_admin', 0)->inRandomOrder()->first()->id
        ];
    }
}
