<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->only('email','password');
        if (Auth::attempt($data)) {
            return redirect()->route('admin.index');
        } else {
            Session::flash('errorLogin', 'Tai khoan khong chinh xac');
            return redirect('login');
        }
    }

    function logout() {
        Auth::logout();
        return redirect()->route('showFormLogin');
    }
}
