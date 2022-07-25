<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderByDesc('id')->get();
        return view('front.events', compact('events'));
    }

    public function show($slug)
    {
        try 
        {
            $event = Event::where('slug', $slug)->first();
            $date = explode('-', $event->date);
            $month = $date[1];
                switch($month)
                {
                    case '01':
                    $ay = 'Yanvar';
                    break;

                    case '02':
                    $ay = 'Fevraı';
                    break;

                    case '03':
                    $ay = 'Mart';
                    break;

                    case '04':
                    $ay = 'Aprel';
                    break;

                    case '05':
                    $ay = 'May';
                    break;

                    case '06':
                    $ay = 'İyun';
                    break;

                    case '07':
                    $ay = 'İyul';
                    break;

                    case '08':
                    $ay = 'Avqust';
                    break;

                    case '09':
                    $ay = 'Sentyabr';
                    break;

                    case '10':
                    $ay = 'Oktyabr';
                    break;

                    case '11':
                    $ay = 'Noyabr';
                    break;

                    case '12':
                    $ay = 'Dekabr';
                    break;
                }
            $date = $ay.' '.$date[2].', '.$date[0];
            return view('front.event-single', compact('event', 'date'));
        } 
        catch (\Throwable $th) 
        {
            throw $th;
        }   
    }
}
