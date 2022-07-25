<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Artist;
use App\Models\Category;
use App\Models\Event;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index()
    {
        $date = date('Y-m-d');
        $top_songs = Song::where('top', true)->orderByDesc('id')->take(10)->get();
        $songs = Song::orderByDesc('id')->take(10)->get();
        $partners = Partner::all();
        $events = Event::where('date', '>', $date)->orderByDesc('id')->take(10)->get();
        $artists = Artist::orderByDesc('id')->get();
        $sliders = Slider::orderByDesc('id')->take(10)->get();
        $about = About::first();
        return view('front.index', compact('about','sliders', 'partners', 'artists', 'events', 'top_songs', 'songs'));
    }
    
    public function lang($lang)
    {
        $languages = ['az', 'ru', 'en'];
        if (in_array($lang, $languages)) {
            Session::put('lang', $lang);
        }
        return redirect()->back();
    }
}
