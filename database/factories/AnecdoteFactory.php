<?php

namespace Database\Factories;

use App\Models\Anecdote;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AnecdoteFactory extends Factory
{
    protected $model = Anecdote::class;

    public function definition()
    {
        if (User::count() == 0) {
            User::factory()->create();
        }

        return [
            'user_id' => User::all()->random()->id,
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
        ];
    }
}
