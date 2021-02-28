<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Movie;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MovieTest extends TestCase
{
    public function test_can_create_a_movie()
    {
        $movie = Movie::factory()->create();

        $this->assertDatabaseCount('movies', 1);
    }

    public function test_can_view_a_movie_page()
    {
        $movie = Movie::factory()->create();

        $response = $this->get(route('movies', $movie->slug));

        $response->assertStatus(200);
    }

    public function test_see_404_when_movie_is_not_found()
    {
        $response = $this->get(route('movies', 'foo-bar-biz-bang'));

        $response->assertStatus(404);
    }
}
