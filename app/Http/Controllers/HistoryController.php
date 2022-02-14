<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index(Request $request){
        if (Auth::check()) {
            if (Auth::user()->is_admin == 1) {
                $trans = Transaction::join('users', 'users.id', '=', 'transactions.user_id')->join('idos', 'idos.id', '=', 'transactions.ido_id')->where('transactions.status', '=', 1)->where('transactions.isRejected', 0)->where(function($query) use ($request){
                    $query->where('users.name', 'LIKE', '%'.$request->search.'%')->orWhere('users.email', 'LIKE', '%'.$request->search.'%');
                })->orderBy('transactions.created_at', 'desc')
                ->get(['transactions.id as id', 'users.name as name', 'users.email', 'users.wallet_address', 'transactions.amountLST', 'transactions.amountBUSD', 'idos.name as ido']);

                return view('admin/pages/history_tbl', compact('trans'));
            }
        }

        return redirect('/')->withErrors('Access is not permitted!');
    }
}
