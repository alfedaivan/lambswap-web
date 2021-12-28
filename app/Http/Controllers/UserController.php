<?php

namespace App\Http\Controllers;

use App\Models\Ido;
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

    public function dex(){
        return view('user/pages/dex');
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
            $ido = Ido::all();
            return view('user/pages/ido', compact('ido'));
        }
        return redirect("/")->withSuccess('Access is not permitted');

    }

    public function detailIdo(){
        return view('user/pages/detail-ido');
    }


    public function transaction(Request $request){
        return view('/')->with('successMsg', 'Transaction Success!');
    }
}
