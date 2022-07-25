<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::orderByDesc('id')->take(10)->get();
        return view('front.artists', compact('artists'));
    }

    public function show($slug)
    {
        try 
        {
            $artist = Artist::where('slug', $slug)->first();
            return view('front.artist-single', compact('artist'));
        } 
        catch (\Throwable $th) 
        {
            throw $th;
        }
    }
}
