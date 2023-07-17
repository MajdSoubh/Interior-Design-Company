<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {



        return [
            "path" => $this->faker->imageUrl(640, 480, 'furniture'),
            "title" => $this->faker->text('10'),
        ];
    }
}
