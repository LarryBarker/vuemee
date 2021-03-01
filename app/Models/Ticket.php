<?php

namespace App\Models;

use App\Models\Showing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function showing()
    {
        return $this->belongsTo(Showing::class);
    }

    public function scopeUnused($query)
    {
        $query->whereNull('used_on');
    }
}
