<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{

    // constructor
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

    // create
    public function create()
    {
        return view('sessions.create');
    }

    // store
    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, $request->has('remember'))){
            if (Auth::user()->activated){
                session()->flash('success', '欢迎回来！');
                return redirect()->intended(route('users.show', [Auth::user()]));
            } else {
                Auth::logout();
                session()->flash('warning', '账号未激活，请检查邮箱中的注册邮件');
                return redirect('/');
            }

        } else {
            session()->flash('danger', '登录账号和密码不匹配');
            return redirect()->back();
        }

        return;
    }

    // destroy
    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');

        return redirect('/');
    }
}
