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
        $url = 'https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/@lambswaptoken/feed';
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody())->items;
        // dd($responseBody);
        return view('user/pages/home', compact('responseBody'));
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

    public function docs(){
        return Redirect::to('https://docslambswap.gitbook.io');
    }

    public function ido(){
        $wallet = Auth::user()->wallet_address || 'login first';
        $ido = Ido::all();
        return view('user/pages/ido', compact('ido', 'wallet'));

    }

    public function detailIdo(){
        return view('user/pages/detail-ido');
    }


    public function transaction(Request $request){
        $data = $request->all();
        $check = $this->createTrans($data);
        $id = $check->id;
        $busd = $check->amountBUSD;
        return view('/user/pages/invoice', compact('busd', 'id'))->with('successMsg', 'Transaction Success!');
    }

    public function invoice(){
        return view('user/pages/invoice');
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
        $transaction = Transaction::FindOrFail($id);

        $details = [
            'title' => 'mail confirmation',
            'body' => $transaction
        ];
        // dd(Auth::user()->email);
        Mail::to(Auth::user()->email)->send(new \App\Mail\sendmail($details));
        return redirect('/IDO')->withSuccess('email has sent');
    }

}
