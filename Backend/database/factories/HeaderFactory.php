<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HeaderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "introTitle" => $this->faker->randomElement(["Welcome", "Hello"]),
            "introDescription" => $this->faker->sentence(20),

            "outroTitle" => $this->faker->sentence(3),
            "outroDescription" => $this->faker->sentence(25),

            "portfolioDescription" => $this->faker->sentence(20),
            "aboutDescription" => $this->faker->text(25),


        ];
    }
}
