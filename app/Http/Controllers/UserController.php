<?php

namespace App\Http\Controllers;

use App\Models\Ido;
use App\Models\Transaction;
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
            $wallet = Auth::user()->wallet_address;
            $ido = Ido::all();

            return view('user/pages/ido', compact('ido', 'wallet'));
        }
        return redirect("/")->withSuccess('Access is not permitted');

    }

    public function detailIdo(){
        return view('user/pages/detail-ido');
    }


    public function transaction(Request $request){
        $status = 'Open';
        $id_user = Auth::user()->id;
        $findIDO = Ido::where('status', $status)->first();
        $id_IDO = $findIDO->id;
        // dd($findIDO->id);
        // $request->validate([
        //     'amountLST' => 'required',
        //     'amountBUSD' => 'required'
        // ]);
        // dd($request->amountLST);
        $lst = $request->amountLST;
        $busd = $request->amountBUSD;

        // dd((float)$busd);
        Transaction::create([
            'amountLST' => (float)$lst,
            'amountBUSD' => (float)$busd,
            'user_id' => $id_user,
            'ido_id' => $id_IDO
        ]);

        // return view('/')->with('successMsg', 'Transaction Success!');
    }

    public function invoice(){
        return view('user/pages/invoice');
    }
}
