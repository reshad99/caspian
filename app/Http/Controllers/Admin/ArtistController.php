<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestType;
use App\Http\Requests\Artist\ArtistStoreRequest;
use App\Http\Requests\Artist\ArtistUpdateRequest;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->search = $request->search;
        $artist_query = Artist::query();

        if(!is_null($this->search))
        $artist_query->where('name' , 'like', '%' . $this->search . '%');

        $artist_query->take(10)->orderByDesc('id');
        $artists = $artist_query->get();

        if(!is_null($this->search))
        return response()->json(['status' => 1, 'info' => $artists], 200);

        if($request->ajax())
        return response()->json(['status' => 0, 'info' => $artists], 200);

        return view('back.artist.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.artist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtistStoreRequest $request)
    {
        try 
        {
            $artist = new Artist();
            $artist->name = $request->name;
            $artist->slug = Str::slug($request->name);
            $photo = $request->photo;
            $photo_name = uniqid().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path('images/artists'), $photo_name);
            $artist->photo = '/images/artists/'.$photo_name;  
            $artist->text1 = $request->text1;
            $artist->instagram = $request->instagram;
            $artist->tiktok = $request->tiktok;
            $artist->youtube = $request->youtube;
            $artist->save();
            return $this->response(RequestType::Create, null, 200);

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
            $artist = Artist::findOrFail($id);
            return view('back.artist.edit', compact('artist'));
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
    public function update(ArtistUpdateRequest $request)
    {
        try 
        {
            $id = $request->id;
            $artist = Artist::findOrFail($id);
            $artist->name = $request->name;
            $artist->slug = Str::slug($request->name);
            if ($request->has('photo')) 
            {
                File::delete(public_path($artist->photo));
                $photo = $request->photo;
                $photo_name = uniqid().'.'.$photo->getClientOriginalExtension();
                $photo->move(public_path('images/artists'), $photo_name);
                $artist->photo = '/images/artists/'.$photo_name;  
            }
            
            $artist->text1 = $request->text1;
            $artist->instagram = $request->instagram;
            $artist->tiktok = $request->tiktok;
            $artist->youtube = $request->youtube;
            $artist->update();
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
            $artist = Artist::findOrFail($id);
            File::delete(public_path($artist->photo));
            $artist->delete();
            return $this->response(RequestType::Delete, null, 200);
        } 
        catch (\Exception $th) 
        {
            return response(['status' => 0, 'message' => 'Error']);
        }
    }
}
