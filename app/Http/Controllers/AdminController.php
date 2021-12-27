<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        // dd(Auth::check());
        if (Auth::check()) {
            if (Auth::user()->is_admin == 1) {
                $user = User::where('is_admin', 0);
                return view('admin/pages/dashboard', compact('user'));
            }
        }
        return redirect('/')->withSuccess('Access is not permitted');
    }

}
