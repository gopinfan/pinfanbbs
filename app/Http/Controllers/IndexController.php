<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    // home
    public function home()
    {

        $feedItems = [];
        if (Auth::check()){
            $feedItems = Auth::user()->feed()->paginate(10);
        }
        return view('index/home', compact('feedItems'));
    }

    // about
    public function about()
    {
        return view('index/about');
    }
}
