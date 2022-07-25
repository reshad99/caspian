<?php
namespace App\Providers;

use App\Models\About;
use App\Models\Contact;
use Illuminate\Support\ServiceProvider;
use DB;
use App\Models\Reservation;
use App\Models\Song;
use Illuminate\Support\Facades\Cookie;

class ComposerServiceProvider extends ServiceProvider
{

    public function boot()
    {

        // Using Closure based composers
        view()->composer('back.*', function ($view) {
           $contact = Contact::first();
           $about = About::first();
           $view->contact = $contact;
           $view->about = $about;
        });

        view()->composer('front.*', function ($view) {
            $contact = Contact::first();
            $about = About::first();

            $active_song = Song::orderByDesc('id')->first();

            $view->active_song = $active_song;
            $view->contact = $contact;
            $view->about = $about;
         });
    }

    public function register()
    {
        //
    }
}