<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        // dd(Auth::check());
        if (Auth::check()) {
            if (Auth::user()->is_admin == 1) {
                return view('admin/pages/dashboard');
            }
        }
        return redirect('/')->withSuccess('Access is not permitted');
    }

}
