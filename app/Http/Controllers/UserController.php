<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('user/pages/home');
    }

    public function product(){
        return view('user/pages/product');
    }

    public function games(){
        return view('user/pages/game');
    }

    public function bounty(){
        return view('user/pages/bounty');
    }

    public function help(){
        return view('user/pages/help');
    }

    public function ido(){
        if (Auth::check()) {
            return view('user/pages/ido');
        }
        return redirect("/")->withSuccess('Access is not permitted');

    }

    public function detailIdo(){
        return view('user/pages/detail-ido');
    }
}
