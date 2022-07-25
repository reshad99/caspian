<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestType;
use App\Models\Artist;
use App\Models\MusicVideo;
use Illuminate\Http\Request;

class MusicVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->search = $request->search;
        $video_query = MusicVideo::query();

        if(!is_null($this->search))
        $video_query->whereHas('artist', function($query){
            $query->where('name' , 'like', '%' . $this->search . '%');
        });

        $video_query->take(10)->orderByDesc('id');
        $videos = $video_query->get();

        if(!is_null($this->search))
        return response()->json(['status' => 1, 'info' => $videos], 200);

        if($request->ajax())
        return response()->json(['status' => 0, 'info' => $videos], 200);

        return view('back.musicvideo.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artists = Artist::orderBy('name', 'ASC')->get();
        return view('back.musicvideo.create', compact('artists'));
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
            $video = new MusicVideo();
            $video->link = $request->link;
            $video->name = $request->name;
            $video->artist_id = $request->artist_id;
            $video->save();
            return $this->response(RequestType::Create, null, 201);
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
            $artists = Artist::orderBy('name', 'ASC')->get();
            $video = MusicVideo::findOrFail($id);
            return view('back.musicvideo.edit', compact('video', 'artists'));
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
            $video = MusicVideo::findOrFail($id);
            $video->link = $request->link;
            $video->name = $request->name;
            $video->artist_id = $request->artist_id;
            $video->update();
            return $this->response(RequestType::Update, null, 200);
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
            $video = MusicVideo::findOrFail($id);
            $video->delete();
            return $this->response(RequestType::Delete, null, 200);
        } 
        catch (\Exception $th) 
        {
            return response(['status' => 0, 'message' => 'Error']);
        }
    }
}
