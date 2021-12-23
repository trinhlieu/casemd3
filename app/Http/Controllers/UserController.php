<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    function index()
    {
        if (!Gate::allows('crud-user')) {
            abort(403);
        }
        $users = User::all();
        return view('users.list', compact('users'));
    }

    function create()
    {
        if (!Gate::allows('crud-user')) {
            abort(403);
        }
        return view('users.create');
    }

    function store(AdminRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->birthday = $request->birthday;
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('images', 'public');
            $user->avatar = $path;
        }
        $user->save();
        Session::flash('success', 'Them moi khach hang thanh cong');
        return redirect()->route('admin.user.index');
    }

    function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('success', 'Xoa khach hang thanh cong');
        return redirect()->route('admin.user.index');
    }
}
