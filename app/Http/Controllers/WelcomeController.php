<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

class WelcomeController extends Controller
{
    public function show()
    {
        return Inertia::render('Welcome', [
            'popular_movies' => Movie::popular()->get(),
            'now_showing' => Movie::nowShowing()->get(),
        ]);
    }
}
