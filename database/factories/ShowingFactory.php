<?php

namespace Database\Factories;

use App\Models\Showing;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShowingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Showing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'showing_at' => $this->faker->dateTimeThisMonth('1 month', 'America/Chicago'),
            'max_tickets' => $this->faker->numberBetween(10, 100),
        ];
    }
}
