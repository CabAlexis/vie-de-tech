<?php

namespace Database\Seeders;

use App\Models\Anecdote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnecdotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anecdote::factory(50)->create();
    }
}
