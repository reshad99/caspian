<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ConfirmController extends Controller
{
    public function confirm(Request $request){
        $id = $request->id;
        $table = $request->table;

        switch ($table) {
            case 'reservations':
                try {
                    $reserve = Reservation::findOrFail($id);
                    $reserve->confirm = true;
                    $reserve->update();
                    return response(['status' => 1], 200);
                } catch (\Throwable $th) {
                    return response(['status' => 0], 401);
                }
                break;
            default:
                # code...
                break;
        }
    }
}
