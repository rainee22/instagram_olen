<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory('id'),
            'title' => fake()->sentence(),
            'photo' => 'https://images2.alphacoders.com/528/thumb-1920-528327.jpg',
            'caption' => fake()->paragraph(),
        ];
    }
}
