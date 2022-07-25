<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestType;
use App\Http\Requests\Reservation\ReservationRequest;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function post(ReservationRequest $request){
        try {
            $reserv = new Reservation();
            $reserv->name = $request->name;
            $reserv->phone = $request->phone;
            $reserv->email = $request->email;
            $reserv->save();
            return $this->response(RequestType::Create, null, 201);
        } catch (\Exception $e) {
            return response(['status' => 0, 'message' => 'Zəhmət olmasa bütün xanaları doldurun və yenidən cəhd edin'.$e->getMessage()], 401);
        }
    }
}
