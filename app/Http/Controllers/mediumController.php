<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class mediumController extends Controller
{
    public function fetch()
    {
        return view('users/pages/home');
    }
}
