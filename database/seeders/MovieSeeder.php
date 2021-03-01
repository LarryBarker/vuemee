<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Showing;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $moviesWithShowings = Movie::factory()
            ->count(10)
            ->has(Showing::factory()->count(10))
            ->make();

        // little trickery to prevent duplicate movies from being created and throwing exception
        // i chose to not worry about creating another movie since its rare this might happen
        // and we'll have enough data to test anyway
        // @see https://laravel-tricks.com/tricks/laravel-factory-with-unique-value-columns
        for ($i = 0; $i < 10; $i++) {
            try {
                Movie::factory()
                    ->has(Showing::factory()->count(10))
                    ->create();
            } catch (\Illuminate\Database\QueryException $e) {
                continue;
            }
        }
    }
}
