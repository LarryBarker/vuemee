<?php

namespace Database\Factories;

use App\Models\Gift;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

class GiftFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gift::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ticket = Ticket::all()->random();
        return [
            'ticket_id' => $ticket->id,
            'given_by' => $ticket->user->id,
            'given_to' => User::all()->random()->id,
            'given_on' => now(),
        ];
    }
}
