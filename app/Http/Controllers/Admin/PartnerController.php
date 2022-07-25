<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestType;
use App\Http\Requests\PartnerRequest;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $partners = Partner::take(10)->orderByDesc('id')->get();
        return view('back.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnerRequest $request)
    {
        try 
        {
            $partner = new Partner;
            $logo = $request->logo;
            $logo_name = uniqid().'.'.$logo->getClientOriginalExtension();
            $logo->move(public_path('images/partners/') , $logo_name);
            $partner->logo = '/images/partners/'.$logo_name;
            $partner->link = $request->link;
            $partner->save();

            return $this->response(RequestType::Create, null, 201);
        } 
        catch (\Exception $e) 
        {
            return $e->getMessage();
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
        $partner = Partner::findOrFail($id);
        return view('back.partners.edit', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try 
        {
            $id = $request->id;
            $partner = Partner::findOrFail($id);
            $partner->link = $request->link;
            if ($request->has('logo')) 
            {
                File::delete(public_path($partner->logo));
                $logo = $request->logo;
                $logo_name = uniqid().'.'.$logo->getClientOriginalExtension();
                $logo->move(public_path('images/partners/') , $logo_name);
                $partner->logo = '/images/partners/'.$logo_name;
            }
            else
            $partner->logo = $partner->logo;

            
            
            $partner->update();
            return $this->response(RequestType::Update, null, 200);
        } 
        catch (\Exception $e) 
        {
            return $e->getMessage();
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
            $partner = Partner::findOrFail($id);
            File::delete(public_path($partner->logo));
            $partner->delete();
            return $this->response(RequestType::Delete, null, 200);
        } 
        catch (\Exception $e) 
        {
            return $e->getMessage();
        }
    }
}
