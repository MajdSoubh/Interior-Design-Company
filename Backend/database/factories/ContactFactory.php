<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "email" => $this->faker->unique()->safeEmail(),
            "phone" => $this->faker->phoneNumber(),
            "address" => $this->faker->address(),
            "whatsapp" => "wa.me/" . $this->faker->randomNumber(9),
            "facebook" => "facebook.com/" . $this->faker->text(10),
            "instagram" => "instagram.com/" . $this->faker->text(10),

        ];
    }
}
