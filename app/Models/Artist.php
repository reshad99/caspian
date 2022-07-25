<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    public function videos()
    {
        return $this->hasMany(MusicVideo::class, 'artist_id', 'id');
    }
}
