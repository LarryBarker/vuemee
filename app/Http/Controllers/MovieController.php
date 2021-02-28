<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Inertia\Inertia;

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
            'movie' => $movie
        ]);
    }
}
