<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicVideo extends Model
{
    use HasFactory;

    protected $with = ['artist'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
