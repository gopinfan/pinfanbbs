<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    // create
    public function create()
    {
        return view('users.create');
    }

    // show
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    // store
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        session()->flash('success', '注册成功，欢迎您加入！');

        return redirect()->route('users.show', [$user]);
    }
}