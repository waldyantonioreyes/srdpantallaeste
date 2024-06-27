<?php

namespace Database\Factories;

use App\Models\Fuel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FuelFactory extends Factory
{
    protected $model = Fuel::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'type' => $this->faker->name,
			'price' => $this->faker->name,
        ];
    }
}
