<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Models\User;
use Inertia\Inertia;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class GiftController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->validate([
            'ticket_id' => 'required|exists:tickets,id'
        ]);

        $ticket = Ticket::findOrFail($data['ticket_id']);

        if (Auth::user()->id !== $ticket->user_id) {
            abort(403);
        }

        if ($ticket->hasBeenSent()) {
            return Redirect::route('dashboard')->with('error', 'You have already sent this ticket as a gift.');
        }

        return Inertia::render('Gift');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'ticket_id' => 'required|exists:tickets,id'
        ]);

        $sendTo = User::firstOrCreate([
            'email' => $data['email'],
        ]);

        $gift = $sendTo->gifts()->create([
            'given_by' => Auth::user()->id,
            'ticket_id' => $data['ticket_id'],
            'given_on' => now()
        ]);

        return Redirect::route('dashboard')->with('success', 'Successfully sent gift.');
    }
}
