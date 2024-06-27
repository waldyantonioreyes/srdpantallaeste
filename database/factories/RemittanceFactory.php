<?php

namespace Database\Factories;

use App\Models\Remittance;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RemittanceFactory extends Factory
{
    protected $model = Remittance::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'buy' => $this->faker->name,
			'sell' => $this->faker->name,
        ];
    }
}
