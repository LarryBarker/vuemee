<?php

namespace Database\Seeders;

use App\Models\Gift;
use Illuminate\Database\Seeder;

class GiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            try {
                Gift::factory()
                    ->create();
            } catch (\Illuminate\Database\QueryException $e) {
                continue;
            }
        }
    }
}
