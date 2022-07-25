<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestType;
use Illuminate\Http\Request;
use App\Models\Privacy;
use Illuminate\Support\Facades\DB;

class PrivacyController extends Controller
{
    public function index()
    {
        $data['privacies'] = Privacy::get();
        return view('back.privacy.index', $data);
    }

    public function edit()
    {
        if (DB::table('privacies')->where('id', 1)->exists())
        {
            $data['privacy'] = DB::table('privacies')->where('id', 1)->first();
            return view('back.privacy.edit', $data);
        }
        else {
            return redirect()->back();
        }
    }

    public function post_edit(Request $request)
    {
        try {
            if (DB::table('privacies')->where('id', 1)->exists())
            {
    
                $text_az    = $request->text_az;
                $text_en    = $request->text_en;
                $text_ru    = $request->text_ru;
    
    
                DB::table('privacies')->where('id', 1)->update(['text_az' => $text_az, 'text_en' => $text_en, 'text_ru' => $text_ru]);
    
                return $this->response(RequestType::Update, null, 200);
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
       
    }
}
