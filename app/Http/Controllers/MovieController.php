<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use App\Models\Movie;
use App\Models\Showing;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Inertia\Response
     */
    public function show(Movie $movie)
    {
        return Inertia::render('Movie', [
            'movie' => $movie,
            'showings' => $movie->byDay()
        ]);
    }
}
