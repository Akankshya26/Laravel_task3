<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post1;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::get()->random()->id,
            'post_id' => Post1::get()->random()->id,
            'comment_body' => $this->faker->paragraph(2)

        ];
    }
}
