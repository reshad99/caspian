<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator, DB;

class LoginController extends Controller
{
    public function index()
    {
        Visitor::increment('visitor_amount', 1);
        return view('back.login');
    }

    public function post(LoginRequest $request)
    {
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return response()->json(['status' => 1, 'message' => 'Uğurlu giriş!'], 200);
        }
        else
        {
            return response()->json(['status' => 0, 'message' => 'Email və ya şifrə yanlışdır!'], 200);
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
