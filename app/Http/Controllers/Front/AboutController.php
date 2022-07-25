<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\AboutDetail;
use DB;

class AboutController extends Controller
{
    public function index()
    {
        $about_details = AboutDetail::all();
        return view('front.about', compact('about_details'));
    }
}
