<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

class TicketController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // Users must be signed in to purchase tickets
        if (!Auth::user()) {
            return Redirect::route('login');
        }

        $data = Request::validate(['showing_id' => ['required', 'exists:showings,id']]);

        // Only allow the user to purchase a ticket once
        if (Auth::user()->hasPurchasedTicket($data['showing_id'])) {
            return Redirect::back()->with('error', 'You have already purchased a ticket for this showing.');
        }

        Auth::user()->tickets()->create($data);

        return Redirect::route('dashboard')->with('success', 'Successfully purchased ticket');
    }
}
