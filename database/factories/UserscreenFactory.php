<?php

namespace Database\Factories;

use App\Models\Userscreen;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserscreenFactory extends Factory
{
    protected $model = Userscreen::class;

    public function definition()
    {
        return [
			'username' => $this->faker->name,
			'user_id' => $this->faker->name,
        ];
    }
}
