<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blog_categories = BlogCategory::all();
        $blogs = Blog::orderByDesc('id')->get();
        return view('front.blogs', compact('blog_categories', 'blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $blog->view += 1;
        $blog->update();
        return view('front.blog-single', compact('blog'));
    }
}
