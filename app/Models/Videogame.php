<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'publisher',
        'developer',
        'release_date',
        'genre',
        'platform',
        'price',
        'rating',
        'cover_image',
        'multiplayer',
        'max_players',
        'language',
        'age_rating',
        'storage_required'
    ];
}