<?php

namespace App\Http\Controllers;

use App\Models\Ido;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{


    public function index(){
        // dd(Auth::check());
        if (Auth::check()) {
            if (Auth::user()->is_admin == 1) {
                $acc = Transaction::where('status', 1);
                $trans = Transaction::join('users', 'users.id', '=', 'transactions.user_id')->join('idos', 'idos.id', '=', 'transactions.ido_id')->where('transactions.status', '=', 0)
                ->get(['transactions.id as id', 'users.name as name', 'users.email', 'users.wallet_address', 'transactions.amountLST', 'transactions.amountBUSD', 'idos.name as ido']);

                $user = User::where('is_admin', 0);
                return view('admin/pages/dashboard', compact('user', 'trans', 'acc'));
            }
        }
        return redirect('/')->withSuccess('Access is not permitted');
    }

    public function changeStatus(Request $request, $id){
        $ido = $request->ido;
        $lst = $request->lst;
        Transaction::find($id)->update(['status' => 1]);
        Ido::where('name', $ido)->decrement('amount', (float)$lst);
        // dd($idoUpdate);
        return redirect('/dashboard')->withSuccess('data has been updated!');
    }
}
