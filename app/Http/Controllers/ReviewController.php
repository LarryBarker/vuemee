<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

class ReviewController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // Users must be signed in to review movies
        if (!Auth::user()) {
            return Redirect::route('login');
        }

        $data = Request::validate([
            'review' => ['required', 'min:1', 'max:5'],
            'movie_id' => ['required', 'exists:movies,id']
        ]);

        $review = Review::updateOrCreate([
            'user_id' => Auth::user()->id,
            'movie_id' => $data['movie_id'],
        ], [
            'score' => $data['review']
        ]);

        return Redirect::back()->with('success', 'Successfully added your review');
    }
}
