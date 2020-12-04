<?php

namespace Database\Factories;

use App\Models\Font;
use Illuminate\Database\Eloquent\Factories\Factory;

class FontFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Font::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'weight' => $this->faker->numberBetween(50, 950),
            'name' => $this->faker->firstNameMale
        ];
    }
}
