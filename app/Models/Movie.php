<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

    /** @var array */
    protected $appends = ['runtime', 'next_showing', 'score'];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($movie) {
            $movie->slug = Str::of($movie->title)->slug('-');
        });
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function showings()
    {
        return $this->hasMany(Showing::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function scopePopular($query)
    {
        $query->whereHas('reviews');
    }

    public function scopeNowShowing($query)
    {
        $query->whereDoesntHave('reviews');
    }

    public function byDay()
    {
        return $this->showings()
            ->orderBy('showing_at')
            ->get()
            ->groupBy(function ($showing) {
                return Carbon::parse($showing->showing_at)->format('l, F jS, Y');
            });
    }

    public function getRuntimeAttribute()
    {
        return Carbon::parse($this->length)->format('g \HR i \M\I\N\S');
    }

    public function getScoreAttribute()
    {
        return (int) round($this->reviews()->average('score'));
    }

    public function getNextShowingAttribute()
    {
        return $this->showings()->orderBy('showing_at')->first();
    }
}
