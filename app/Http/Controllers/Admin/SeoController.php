<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestType;
use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function seo_update(Request $request)
    {
        try {
            $seo = Seo::first();
            $seo->meta_title = $request->meta_title;
            $seo->meta_description = $request->meta_description;
            $seo->meta_keywords = $request->meta_keywords;
            $seo->update();

            return $this->response(RequestType::Update, $seo, 200);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        
    }
}
