<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showing extends Model
{
    use HasFactory;

    protected $casts = ['showing_at' => 'datetime'];

    /** @var array */
    protected $appends = ['show_date', 'show_time', 'remaining_tickets'];

    public function getShowDateAttribute()
    {
        return $this->showing_at->format('l, F d, Y');
    }

    public function getShowTimeAttribute()
    {
        return $this->showing_at->format('g:iA');
    }

    public function getRemainingTicketsAttribute()
    {
        return $this->max_tickets - 5;
    }
}
