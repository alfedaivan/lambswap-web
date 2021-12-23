<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('user/pages/ido');
    }

    public function detailIdo(){
        return view('user/pages/detail-ido');
    }
}
