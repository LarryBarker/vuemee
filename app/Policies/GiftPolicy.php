<?php

namespace App\Policies;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GiftPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the gift page.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Ticket  $ticket
     * @return mixed
     */
    public function create(User $user, Ticket $ticket)
    {
        return $user->id === $ticket->id;
    }

    /**
     * Determine whether the user can send the ticket as a gift.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Ticket  $ticket
     * @return mixed
     */
    public function send(User $user, int $ticketUserId)
    {
        return $user->id === $ticketUserId;
    }
}
