<?php

namespace Database\Factories;

use App\Models\Showing;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'showing_id' => Showing::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
