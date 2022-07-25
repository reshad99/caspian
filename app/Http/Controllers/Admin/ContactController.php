<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestType;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        $data['contacts'] = Contact::get();
        return view('back.contact.index', $data);
    }

    public function edit()
    {
        if (DB::table('contacts')->where('id', 1)->exists())
        {
            $data['contact'] = DB::table('contacts')->where('id', 1)->first();
            return view('back.contact.edit', $data);
        }
        else {
            return redirect()->back();
        }
    }

    public function post_edit(ContactRequest $request)
    {
        try {
            if (DB::table('contacts')->where('id', 1)->exists())
            {
                $address_az = $request->input('address_az');
                $address_en = $request->input('address_en');
                $address_ru = $request->input('address_ru');
                $instagram  = $request->instagram;
                $linkedin   = $request->linkedin;
                $twitter    = $request->twitter;
                $facebook   = $request->facebook;
                $youtube    = $request->youtube;
                $phone     = $request->input('phone');
                $email      = $request->input('email');


                DB::table('contacts')->where('id', 1)->update(['address_az' => $address_az, 'address_en' => $address_en, 'address_ru' => $address_ru, 'instagram' => $instagram, 'linkedin' => $linkedin, 'twitter' => $twitter, 'facebook' => $facebook, 'youtube' => $youtube, 'phone' => $phone, 'email' => $email]);

                return $this->response(RequestType::Update, null, 200);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 1, 'message' => $e->getMessage()], 400);
        }

    }
}
