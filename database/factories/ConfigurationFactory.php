<?php

namespace Database\Factories;

use App\Models\Configuration;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ConfigurationFactory extends Factory
{
    protected $model = Configuration::class;

    public function definition()
    {
        return [
			'user_id' => $this->faker->name,
			'bankname' => $this->faker->name,
			'headercolor' => $this->faker->name,
        ];
    }
}
