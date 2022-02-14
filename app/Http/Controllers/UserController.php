<?php

namespace App\Http\Controllers;

use App\Models\Ido;
use App\Models\Transaction;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(){
        $client = new Client();
        $onGoing  = Ido::where('status', 'On Going')->first();
        $url = 'https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/@lambswaptoken/feed';
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody())->items;
        // dd($responseBody);
        return view('user/pages/home', compact('responseBody', 'onGoing'));
    }

    public function product(){
        $onGoing  = Ido::where('status', 'On Going')->first();

        return view('user/pages/product', compact('onGoing'));
    }

    public function dex(){
        $onGoing  = Ido::where('status', 'On Going')->first();

        return view('user/pages/dex', compact('onGoing'));
    }

    public function games(){
        $onGoing  = Ido::where('status', 'On Going')->first();

        return view('user/pages/game', compact('onGoing'));
    }

    public function bounty(){
        $onGoing  = Ido::where('status', 'On Going')->first();

        return view('user/pages/bounty', compact('onGoing'));
    }

    public function help(){
        $onGoing  = Ido::where('status', 'On Going')->first();

        return view('user/pages/help', compact('onGoing'));
    }

    public function team(){
        $onGoing  = Ido::where('status', 'On Going')->first();

        return view('user/pages/team', compact('onGoing'));
    }

    public function docs(){
        return Redirect::to('https://docslambswap.gitbook.io');
    }

    public function ido(){
        $ido = Ido::all();
        $transaction = Transaction::where('status', 1)->where('isRejected', 0)->groupBy('ido_id')->selectRaw('sum(amountBUSD) as busd, ido_id')->get();
        // dd($transaction[0]);
        $onGoing  = Ido::where('status', 'On Going')->first();
        $cek = Ido::where('status', 'On Going')->first();

        if (Auth::check()) {
            $wallet = Auth::user()->wallet_address;
            $user = Auth::user()->id;
            $perIdo = Transaction::where('user_id', $user)->where('status', 1)->where('isRejected', 0)->selectRaw('sum(amountLST) as lst, ido_id')->groupBy('ido_id')->get();
            // dd($user);
            // $total = Transaction::where('user_id', $user)->get();
            $total = Transaction::where('user_id', $user)->where('status', 1)->where('isRejected', 0)->selectRaw('sum(amountLST) as total')->first();
            return view('user/pages/ido', compact('ido', 'onGoing', 'wallet', 'total', 'transaction', 'perIdo', 'cek'));
        } else {
            return view('user/pages/ido', compact('ido', 'onGoing', 'transaction', 'cek'));
        }

    }

    public function detailIdo(){
        $onGoing  = Ido::where('status', 'On Going')->first();
        $ido = Ido::all();

        $count = Transaction::where('status', 1)->where('isRejected', 0)->selectRaw("count(id) as count, ido_id")->groupBy('ido_id')->get();
        $transaction = Transaction::where('status', 1)->where('isRejected', 0)->groupBy('ido_id')->selectRaw('sum(amountBUSD) as busd, ido_id')->get();

        return view('user/pages/detail-ido', compact('onGoing', 'ido', 'transaction', 'count'));
    }


    public function transaction(Request $request){
        $onGoing  = Ido::where('status', 'On Going')->first();
        $data = $request->all();
        $check = $this->createTrans($data);
        $id = $check->id;
        $busd = $check->amountBUSD;
        return view('/user/pages/invoice', compact('busd', 'id', 'onGoing'))->with('successMsg', 'Transaction Success!');
    }

    public function invoice(){
        $onGoing  = Ido::where('status', 'On Going')->first();

        return view('user/pages/invoice', compact('onGoing'));
    }

    public function createTrans(array $data){
        $status = 'On Going';
        $id_user = Auth::user()->id;
        $findIDO = Ido::where('status', $status)->first();
        $id_IDO = $findIDO->id;
        return Transaction::create([
            'amountLST' => (float)$data['amountLST'],
            'amountBUSD' => (float)$data['amountBUSD'],
            'user_id' => $id_user,
            'ido_id' => $id_IDO
        ]);
    }

    public function sendEmail($id){
        $transaction = Transaction::join('users', 'users.id', '=', 'transactions.user_id')->join('idos', 'idos.id', '=', 'transactions.ido_id')->where('transactions.id', '=', $id)->select('*', 'users.name as name_user')->first();

        $details = [
            'title' => 'Mail Confirmation Buy IDO',
            'name' => $transaction->name_user,
            'wallet_address' => $transaction->wallet_address,
            'username_telegram' => $transaction->username_telegram,
            'amount_busd' => $transaction->amountBUSD,
            'amount_lst' => $transaction->amountLST,
        ];
        // dd(Auth::user()->email);
        Mail::to('info@lambswap.org')->send(new \App\Mail\sendmail($details));
        return redirect('/IDO')->withSuccess('email has sent');
    }

}
