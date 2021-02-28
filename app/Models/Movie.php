<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

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
}
