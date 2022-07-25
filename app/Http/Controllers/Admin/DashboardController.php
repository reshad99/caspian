<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Event;
use App\Models\MusicVideo;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Song;
use App\Models\Visitor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $artists = Artist::count();
        $videos = MusicVideo::count();
        $songs = Song::count();
        $blogs = Blog::count();
        $events = Event::count();
        $visitor = Visitor::select('visitor_amount')->first();
        $visitor_amount = $visitor->visitor_amount;
        return view('back.dashboard', compact('visitor_amount', 'artists', 'videos', 'songs', 'blogs','events'));
    }
}
