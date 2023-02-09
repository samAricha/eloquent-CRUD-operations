<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class CarFactory extends Factory
{

    public function definition()
    {
        $car_name = $this->faker->randomElement(['Audi', 'Mercedes', 'BMW']);


        return [
        'name' => $car_name,
        'founded' => $this->faker->numberBetween(1850, 1950),
        'description' => $this->faker->paragraph,
        ];
    }
}
