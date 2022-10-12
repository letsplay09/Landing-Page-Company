<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'username' => $this->faker->username(),
            'email' => $this->faker->unique()->email(),
            'level' => 'Admin',
            'password' => '$2y$10$uvwtjIWBGh826p3aRmE5lO/JkZHQbjXPuY4W7V/84ygY3.ntpSs.a', // password
        ];
    }
}
