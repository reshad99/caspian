<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestType;
use App\Http\Requests\SliderStoreRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('back.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderStoreRequest $request)
    {
        try 
        {
            $slider = new Slider;
            $slider->title = $request->title;
            $slider->link = $request->link;
            $slider->text = $request->text;

            $image = $request->image;
            $image_name = uniqid().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/sliders/'), $image_name);
            $slider->image = '/images/sliders/'.$image_name;
            
            $slider->save();
            return $this->response(RequestType::Create, null, 201);
        } 
        catch (\Exception $e) 
        {
            return response(['status' => 0, 'message' => 'Şəkil mütləqdir'], 401);
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
            $slider = Slider::findOrFail($id);
            return view('back.sliders.edit', compact('slider'));
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
            $slider = Slider::findOrFail($id);

            if ($request->has('image')) 
            {
                File::delete(public_path($slider->image));
                $image = $request->image;
                $image_name = uniqid().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images/sliders/'), $image_name);
                $slider->image = '/images/sliders/'.$image_name;
            }

            $slider->title = $request->title;
            $slider->link = $request->link;
            $slider->text = $request->text;

            $slider->update();
            return $this->response(RequestType::Update, null, 200);
        } 
        catch (\Exception $e) 
        {
            return response(['status' => 0, 'message' => 'Şəkil mütləqdir'], 401);
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
            $slider = Slider::findOrFail($id);
            File::delete(public_path($slider->image));
            $slider->delete();
            return $this->response(RequestType::Delete, null, 200);
        } 
        catch (\Exception $e) 
        {
            return $e->getMessage();
        }
    }
}
