<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestType;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->search = $request->search;
        $category_query = BlogCategory::query();

        if(!is_null($this->search))
        $category_query->where('name' , 'like', '%' . $this->search . '%');

        $category_query->take(10)->orderByDesc('id');
        $categories = $category_query->get();

        if(!is_null($this->search))
        return response()->json(['status' => 1, 'info' => $categories], 200);

        if($request->ajax())
        return response()->json(['status' => 0, 'info' => $categories], 200);

        return view('back.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try 
        {
            $category = new BlogCategory();
            $category->name = $request->name;
            $category->save();
            return $this->response(RequestType::Create, null, 200);

        } catch (\Exception $e) {
            return response(['status' => 0, 'message' => 'Zəhmət olmasa kateqoriya adı qeyd edin'], 401);
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
            $category = BlogCategory::findOrFail($id);
            return view('back.category.edit', compact('category'));
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
            $category = BlogCategory::findOrFail($id);
            $category->name = $request->name;
            $category->update();
            return $this->response(RequestType::Update, null, 200);

        } catch (\Exception $e) {
            return response(['status' => 0, 'message' => 'Zəhmət olmasa kateqoriya adı qeyd edin'], 401);
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
            $category = BlogCategory::findOrFail($id);
            $category->delete();
            return $this->response(RequestType::Delete, null, 200);
        } 
        catch (\Exception $th) 
        {
            return response(['status' => 0, 'message' => 'Error']);
        }
    }
}
