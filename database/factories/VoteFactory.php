<?php

namespace Database\Factories;

use App\Models\Anecdote;
use App\Models\Comment;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VoteFactory extends Factory
{
    protected $model = Vote::class;

    public function definition()
    {
        if (User::count() == 0) {
            User::factory()->create();
        }

        $votableType = $this->faker->randomElement([Anecdote::class, Comment::class]);

        $votableId = $votableType::inRandomOrder()->first()->id;

        return [
            'votable_id' => $votableId,
            'votable_type' => $this->faker->randomElement(['App\Models\Anecdote', 'App\Models\Comment']),
            'user_id' => User::all()->random()->id,
            'vote_type' => $this->faker->boolean(80),
        ];
    }
}
