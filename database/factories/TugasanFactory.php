<?php

namespace Database\Factories;

use App\Models\Senarai;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tugasan>
 */
class TugasanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->city(),
            'senarai_id' => Senarai::factory(),
        ];
    }
}
