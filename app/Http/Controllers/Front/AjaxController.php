<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestType;
use App\Models\Product;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function load_more(Request $request)
    {
        $offset = $request->offset;
        $category_id = $request->category_id;

        $products = Product::where('category_id', $category_id)->offset($offset)->limit(4)->orderByDesc('id')->get();
        
        return response(['info' => $products], 200);

    }
}
