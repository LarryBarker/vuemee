<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

class DashboardController extends Controller
{
    public function show()
    {
        return Inertia::render('Dashboard', [
            'tickets' => auth()->user()->tickets()->with('showing.movie')->with('gift')->get(),
            'reviews' => auth()->user()->reviews()->with('movie')->get(),
        ]);
    }
}
