<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestType;
use App\Http\Requests\Song\SongStoreRequest;
use App\Models\Artist;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->search = $request->search;
        $song_query = Song::query();

        if(!is_null($this->search))
        $song_query->whereHas('artist', function($query){
            $query->where('name' , 'like', '%' . $this->search . '%');
        })->orWhere('name' , 'like', '%' . $this->search . '%');

        $song_query->take(10)->orderByDesc('id');
        $songs = $song_query->get();

        if(!is_null($this->search))
        return response()->json(['status' => 1, 'info' => $songs], 200);

        if($request->ajax())
        return response()->json(['status' => 0, 'info' => $songs], 200);

        return view('back.song.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artists = Artist::orderBy('name', 'ASC')->get();
        return view('back.song.create', compact('artists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SongStoreRequest $request)
    {
        try 
        {
            $song = new Song();
            $song->name = $request->name;
            $song->artist_id = $request->artist_id;
            $song->duration = $request->duration;

            $mp3 = $request->mp3;
            $mp3_name = uniqid().'.'.$mp3->getClientOriginalExtension();
            $mp3->move(public_path('songs/'), $mp3_name);
            $song->mp3 = "/songs\/".$mp3_name;

            $photo = $request->photo;
            $photo_name = uniqid().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path('songs/'), $photo_name);
            $song->photo = "/songs\/".$photo_name;

            $song->save();
            return $this->response(RequestType::Create, null, 201);
        } catch (\Exception $e) {
            return response(['status' => 0, 'message' => $e->getMessage()], 401);
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
            $song = Song::findOrFail($id);
            return view('back.song.edit', compact('song', 'artists'));
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
            $song = Song::findOrFail($id);
            $song->name = $request->name;
            $song->artist_id = $request->artist_id;
            $song->duration = $request->duration;

            if ($request->has('mp3')) 
            {
                File::delete(public_path($song->mp3));
                $mp3 = $request->mp3;
                $mp3_name = uniqid().'.'.$mp3->getClientOriginalExtension();
                $mp3->move(public_path('songs/'), $mp3_name);
                $song->mp3 = "/songs\/".$mp3_name;
            }

            if ($request->has('photo')) 
            {
                File::delete(public_path($song->photo));
                $photo = $request->photo;
                $photo_name = uniqid().'.'.$photo->getClientOriginalExtension();
                $photo->move(public_path('songs/'), $photo_name);
                $song->photo = "/songs\/".$photo_name;
            }
            

            $song->update();
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
            $song = Song::findOrFail($id);
            File::delete(public_path($song->mp3));
            File::delete(public_path($song->photo));
            $song->delete();
            return $this->response(RequestType::Delete, null, 200);
        } 
        catch (\Exception $th) 
        {
            return response(['status' => 0, 'message' => 'Error']);
        }
    }
}
