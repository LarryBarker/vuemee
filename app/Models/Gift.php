<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory;

    protected $casts = ['given_on' => 'timestamp'];

    protected $fillable = ['ticket_id', 'given_by', 'given_to'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function donor()
    {
        return $this->belongsTo(User::class, 'given_by', 'id');
    }

    public function recipient()
    {
        return $this->belongsTo(User::class, 'given_to', 'id');
    }
}
