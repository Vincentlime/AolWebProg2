<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = \App\Models\User::class;
    public function definition()
    {
        $role = ['admin', 'customer'];

        return [
            'name' => $this->faker->name(),
            'role' => $this->faker->randomElement($role), 
            'email' => $this->faker->unique->safeEmail,
            'password' => $this->faker->password(8), 
            'phone_number' =>'08' . $this->faker->unique()->numerify('##########'), 
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    }
