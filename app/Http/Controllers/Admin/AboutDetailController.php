<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestType;
use App\Models\AboutDetail;
use Illuminate\Http\Request;

class AboutDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->search = $request->search;
        $about_query = AboutDetail::query();

        if(!is_null($this->search))
        $about_query->where('title' , 'like', '%' . $this->search . '%');

        $about_query->take(10)->orderByDesc('id');
        $abouts = $about_query->get();

        if(!is_null($this->search))
        return response()->json(['status' => 1, 'info' => $abouts], 200);

        if($request->ajax())
        return response()->json(['status' => 0, 'info' => $abouts], 200);

        return view('back.about_details.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.about_details.create');
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
            $about = new AboutDetail();
            $about->title = $request->title;
            $about->text = $request->text;
            $about->save();
            return $this->response(RequestType::Create, null, 201);

        } catch (\Exception $e) {
            return response(['status' => 0, 'message' => 'Səhvə yol verildi zəhmət olmasa bütün xanaları doldurun'], 401);
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
            $about = AboutDetail::findOrFail($id);
            return view('back.about_details.edit', compact('about'));
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
            $about = AboutDetail::findOrFail($id);
            $about->title = $request->title;
            $about->text = $request->text;
            $about->update();
            return $this->response(RequestType::Update, null, 200);

        } catch (\Exception $e) {
            return response(['status' => 0, 'message' => 'Səhvə yol verildi zəhmət olmasa bütün xanaları doldurun'], 401);
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
            $about = AboutDetail::findOrFail($id);
            $about->delete();
            return $this->response(RequestType::Delete, null, 200);
        } 
        catch (\Exception $th) 
        {
            return response(['status' => 0, 'message' => 'Error']);
        }
    }
}
