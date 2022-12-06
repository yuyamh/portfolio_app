<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Teaching_plan;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teaching_plan>
 */
class Teaching_planFactory extends Factory
{

    protected $model = Teaching_plan::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'content' => $this->faker->realText(),
        ];
    }
}
