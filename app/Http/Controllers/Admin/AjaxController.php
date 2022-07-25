<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestType;
use App\Models\Artist;
use App\Models\BlogCategory;
use App\Models\BoughtProduct;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Event;
use App\Models\Invoice;
use App\Models\MusicVideo;
use App\Models\Partner;
use App\Models\PartNumber;
use App\Models\Payment;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\SoldProduct;
use App\Models\Song;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    protected $search;
    public function load_data(Request $request)
    {
        sleep(1);
        $table        = $request->table;
        $this->search = $request->search;
        $offset       = $request->offset;
        $query        = '';
        if ($table == 'artists') {
            $query = Artist::query();

            if(!is_null($this->search))
            $query->where('name' , 'like', '%' . $this->search . '%');

        }

        elseif($table == 'videos')
        {
            $query = MusicVideo::query();

            if(!is_null($this->search))
            $query->whereHas('artist', function($query){
                $query->where('name' , 'like', '%' . $this->search . '%');
            });
        }

        elseif($table == 'events')
        {
            $query = Event::query();

            if(!is_null($this->search))
            $query->where('title' , 'like', '%' . $this->search . '%')
            ->orWhereHas('artist', function($query){
                $query->where('name' , 'like', '%' . $this->search . '%');
            });
        }

        elseif($table == 'about-details')
        {
            $query = Event::query();

            if(!is_null($this->search))
            $query->where('title' , 'like', '%' . $this->search . '%');
        }

        elseif($table == 'songs')
        {
            $query = Event::query();

            if(!is_null($this->search))
            $query->whereHas('artist', function($query){
                $query->where('name' , 'like', '%' . $this->search . '%');
            })->orWhere('name' , 'like', '%' . $this->search . '%');
        }

        elseif($table == 'user')
        {
            $query = User::query();

            if(!is_null($this->search))
            $query->where('name' , 'like', '%' . $this->search . '%');
        }

        elseif($table == 'categories')
        {
            $query = BlogCategory::query();

            if(!is_null($this->search))
            $query->where('name' , 'like', '%' . $this->search . '%');
        }


        elseif($table == 'partners')
        $query = Partner::query();

        $query->orderByDesc('id')->offset($offset)->limit(5);
        $info = $query->get();

        if($info->count() > 0)
        return response()->json(['status' => 1, 'info' => $info, 'table' => $table], 200);
        else
        return response()->json(['status' => 0], 200);
    }

    public function top_check(Request $request)
    {
        $id = $request->id;
        $status = $request->status;

        $song = Song::findOrFail($id);
        $song->top = $status;
        $song->update();
    }
}
