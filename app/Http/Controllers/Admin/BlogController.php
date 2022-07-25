<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestType;
use App\Http\Requests\Blog\BlogStoreRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $blog_query = Blog::query();

        if(!is_null($search))
        $blog_query->where('name' , 'like', '%' . $search . '%');

        $blog_query->take(10)->orderByDesc('id');
        $blogs = $blog_query->get();

        if(!is_null($search))
        return response()->json(['status' => 1, 'info' => $blogs], 200);

        if($request->ajax())
        return response()->json(['status' => 0, 'info' => $blogs], 200);

        return view('back.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BlogCategory::all();
        return view('back.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogStoreRequest $request)
    {
        try 
        {
            $blog = new Blog();
            $blog->title = $request->title;
            $blog->category_id = $request->category_id;
            $blog->slug = Str::slug($request->title);

            $photo = $request->photo;
            $photo_name = uniqid().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path('images/artists'), $photo_name);
            $blog->photo = '/images/artists/'.$photo_name;
            
            $cover_photo = $request->cover_photo;
            $cover_name = uniqid().'.'.$cover_photo->getClientOriginalExtension();
            $cover_photo->move(public_path('images/artists'), $cover_name);
            $blog->cover_photo = '/images/artists/'.$cover_name;  

            $blog->description = $request->description;
            $blog->instagram = $request->instagram;
            $blog->tiktok = $request->tiktok;
            $blog->youtube = $request->youtube;
            $blog->twitter = $request->twitter;
            $blog->facebook = $request->facebook;
            $blog->save();
            return $this->response(RequestType::Create, null, 200);

        } catch (\Exception $e) {
            return response(['status' => 0, 'message' => 'Zəhmət olmasa bütün xanaları doldurun'], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try 
        {
            $categories = BlogCategory::all();
            $blog = Blog::findOrFail($id);
            return view('back.blog.edit', compact('blog', 'categories'));
        } 
        catch (\Throwable $th) 
        {
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try 
        {
            $id = $request->id;
            $blog = Blog::findOrFail($id);
            $blog->title = $request->title;
            $blog->category_id = $request->category_id;
            $blog->slug = Str::slug($request->title);

            if ($request->has('photo')) 
            {
                File::delete(public_path($blog->photo));
                $photo = $request->photo;
                $photo_name = uniqid().'.'.$photo->getClientOriginalExtension();
                $photo->move(public_path('images/artists'), $photo_name);
                $blog->photo = '/images/artists/'.$photo_name;
            }

            if ($request->has('cover_photo')) 
            {
                File::delete(public_path($blog->cover_photo));
                $cover_photo = $request->cover_photo;
                $cover_name = uniqid().'.'.$cover_photo->getClientOriginalExtension();
                $cover_photo->move(public_path('images/artists'), $cover_name);
                $blog->cover_photo = '/images/artists/'.$cover_name;  
            }

            $blog->description = $request->description;
            $blog->instagram = $request->instagram;
            $blog->tiktok = $request->tiktok;
            $blog->youtube = $request->youtube;
            $blog->twitter = $request->twitter;
            $blog->facebook = $request->facebook;
            $blog->update();
            return $this->response(RequestType::Create, null, 200);

        } catch (\Exception $e) {
            return response(['status' => 0, 'message' => 'Zəhmət olmasa bütün xanaları doldurun'], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try 
        {
            $blog = Blog::findOrFail($id);
            File::delete(public_path($blog->photo));
            File::delete(public_path($blog->cover_photo));
            $blog->delete();
            return $this->response(RequestType::Delete, null, 200);
        } 
        catch (\Exception $th) 
        {
            return response(['status' => 0, 'message' => 'Error']);
        }
    }
}
