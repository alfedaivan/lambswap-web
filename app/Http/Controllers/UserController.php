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
}
