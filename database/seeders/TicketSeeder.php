<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Ticket;
use App\Models\Showing;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 25; $i++) {
            Ticket::factory()
                ->for(User::all()->random())
                ->for(Showing::all()->random())
                ->create();
        }
    }
}
