<?php

namespace App\Http\Controllers;

use App\Models\Ido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class idoController extends Controller
{

    // public function __construct()
    // {
    //     if(!Auth::check() && !Auth::user()->is_admin == 1){
    //         return redirect('/')->withSuccess('Access is not permitted');
    //     }
    // }

    public function index(){
        if (Auth::check()) {
            if(Auth::user()->is_admin == 1) {
                $ido = Ido::all();

                return view('admin/pages/ido_tbl', compact('ido'));
            }
        }
        return redirect('/')->withSuccess('Access is not permitted');
    }

    public function editIDO($id){
        if (Auth::check()) {
            if (Auth::user()->is_admin == 1) {
                $ido = Ido::find($id);
                return view('admin/pages/ido_add', compact('ido'));
            }
        }
        return redirect('/')->withSuccess('Access is not permitted');
    }

    public function editIdoAction($id, Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->is_admin == 1) {

                $this->validate($request, [
                    'name' => 'required',
                    'price' => 'required',
                    'amount' => 'required',
                    'soft_cap' => 'required',
                    'hard_cap' => 'required'
                ]);

                $ido = Ido::find($id);
                $ido->name = $request->name;
                $ido->price = $request->price;
                $ido->amount = $request->amount;
                $ido->soft_cap = $request->soft_cap;
                $ido->hard_cap = $request->hard_cap;
                $ido->save();

                return redirect()->route('ido');
            }
        }
        return redirect('/')->withSuccess('Access is not permitted');
    }
}
