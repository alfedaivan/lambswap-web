<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class idoController extends Controller
{
    public function index(){
        return view('admin/pages/ido_tbl');
    }

    public function addIDO(){
        return view('admin/pages/ido_add');
    }
}
