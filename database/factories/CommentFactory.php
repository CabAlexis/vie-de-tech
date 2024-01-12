<?php

namespace Database\Factories;

use App\Models\Anecdote;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        if (Anecdote::count() == 0) {
            Anecdote::factory()->create();
        }

        if (User::count() == 0) {
            User::factory()->create();
        }

        return [
            'anecdote_id' => Anecdote::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'content' => $this->faker->text,
        ];
    }
}
