<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    function index()
    {
        $products = Product::all();
        return view('admin.index', compact('products'));
    }

    function formChangePW()
    {
        return view('admin.changePW');
    }

    function changePW(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Password cũ không chính xác');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Đổi password thành công');
    }

    function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.changeInfo', compact('user'));
    }

    function update(AdminRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;

        if ($request->hasFile('avatar')) {
            Storage::delete('public/' . $user->avatar);
            $path = $request->file('avatar')->store('images', 'public');
            $user->avatar = $path;
        }
        $user->save();
        return back()->with('successIF', 'Cập nhập thông tin thành công');
    }
}
