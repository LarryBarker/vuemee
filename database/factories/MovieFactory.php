<?php

namespace Database\Factories;

use App\Models\Movie;
use App\Providers\MovieProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new MovieProvider($this->faker));
        return [
            'title' => $this->faker->movie(),
            'description' => $this->faker->overview(),
            'length' => $this->faker->runtime(),
            'poster_url' => 'http://via.placeholder.com/310x460',
            'genre' => $this->faker->movieGenre(),
            'rating' => $this->faker->movieRating(),
        ];
    }
}
