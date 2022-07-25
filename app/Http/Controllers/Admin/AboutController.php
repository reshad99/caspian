<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestType;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $data['about'] = DB::table('abouts')->first();
        $data['seo'] = DB::table('seos')->first();
        $data['contact'] = DB::table('contacts')->first();
        return view('back.about.index', $data);
    }

    public function edit()
    {
        if (DB::table('abouts')->where('id', 1)->exists())
        {
            $data['about'] = DB::table('abouts')->where('id', 1)->first();
            return view('back.about.edit', $data);
        }
        else {
            return redirect()->back();
        }
    }

    public function post_edit(Request $request)
    {
        if ($about = About::first())
        {
            if ($request->has('dark_logo')) 
            {
                File::delete(public_path($about->dark_logo));
                $dark_logo = $request->dark_logo;
                $logo_name = uniqid().'.'.$dark_logo->getClientOriginalExtension();
                $dark_logo->move(public_path('images/logos/'), $logo_name);
                $about->dark_logo = '/images/logos/'.$logo_name;
            }

            if ($request->has('light_logo')) 
            {
                File::delete(public_path($about->light_logo));
                $light_logo = $request->light_logo;
                $logo_name = uniqid().'.'.$light_logo->getClientOriginalExtension();
                $light_logo->move(public_path('images/logos/'), $logo_name);
                $about->light_logo = '/images/logos/'.$logo_name;
            }


            $about->title = $request->title;
            $about->text = $request->text;
            $about->update();

            return $this->response(RequestType::Update, null, 200);
        }
        else {
            return redirect()->back();
        }
    }
}
