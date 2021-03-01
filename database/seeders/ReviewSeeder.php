<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Movie;
use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            Review::factory()
                ->count(1)
                ->for(User::factory()->create())
                ->for(Movie::whereRaw('id % 2 = 0')->get()->random())
                ->create();
        }
    }
}
