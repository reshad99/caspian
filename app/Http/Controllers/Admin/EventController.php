<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestType;
use App\Http\Requests\Event\EventStoreRequest;
use App\Http\Requests\Event\EventUpdateRequest;
use App\Models\Artist;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->search = $request->search;
        $event_query = Event::query();

        if(!is_null($this->search))
        $event_query->where('title' , 'like', '%' . $this->search . '%')
        ->orWhereHas('artist', function($query){
            $query->where('name' , 'like', '%' . $this->search . '%');
        });

        $event_query->take(10)->orderByDesc('id');
        $events = $event_query->get();

        if(!is_null($this->search))
        return response()->json(['status' => 1, 'info' => $events], 200);

        if($request->ajax())
        return response()->json(['status' => 0, 'info' => $events], 200);

        return view('back.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artists = Artist::orderBy('name', 'ASC')->get();
        return view('back.events.create', compact('artists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventStoreRequest $request)
    {
        try 
        {
            $event = new Event();
            $event->title = $request->title;
            $event->slug = Str::slug($request->title);
            $event->description = $request->description;
            $event->artist = $request->artist;
            $event->location = $request->location;
            $event->location_link = $request->location_link;
            $event->date = $request->date;
            $event->time = $request->time;

            $photo = $request->photo;
            $photo_name = uniqid().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path('images/artists'), $photo_name);
            $event->photo = '/images/artists/'.$photo_name;  

            $cover_photo = $request->cover_photo;
            $cover_name = uniqid().'.'.$cover_photo->getClientOriginalExtension();
            $cover_photo->move(public_path('images/events'), $cover_name);
            $event->cover_photo = '/images/events/'.$cover_name;  

            $event->save();
            return $this->response(RequestType::Create, null, 200);

        } 
        catch (\Exception $e) 
        {
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
            $artists = Artist::orderBy('name', 'ASC')->get();
            $event = Event::findOrFail($id);
            return view('back.events.edit', compact('event', 'artists'));
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
    public function update(EventUpdateRequest $request)
    {
        try 
        {
            $id = $request->id;
            $event = Event::findOrFail($id);
            $event->title = $request->title;
            $event->description = $request->description;
            $event->slug = Str::slug($request->title);
            $event->artist = $request->artist;
            $event->location = $request->location;
            $event->location_link = $request->location_link;
            $event->date = $request->date;
            $event->time = $request->time;

            if ($request->has('photo')) 
            {
                File::delete(public_path($event->photo));
                $photo = $request->photo;
                $photo_name = uniqid().'.'.$photo->getClientOriginalExtension();
                $photo->move(public_path('images/artists'), $photo_name);
                $event->photo = '/images/artists/'.$photo_name;  
            }
           

            if ($request->has('cover_photo')) 
            {
                File::delete(public_path($event->cover_photo));
                $cover_photo = $request->cover_photo;
                $cover_name = uniqid().'.'.$cover_photo->getClientOriginalExtension();
                $cover_photo->move(public_path('images/events'), $cover_name);
                $event->cover_photo = '/images/events/'.$cover_name;  
            }
            

            $event->update();
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
            $event = Event::findOrFail($id);
            File::delete(public_path($event->photo));
            File::delete(public_path($event->cover_photo));
            $event->delete();
            return $this->response(RequestType::Delete, null, 200);
        } 
        catch (\Exception $th) 
        {
            return response(['status' => 0, 'message' => 'Error']);
        }
    }
}
