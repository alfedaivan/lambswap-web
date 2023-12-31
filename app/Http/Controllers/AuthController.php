<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function viewAdmin(){
        return view('admin/pages/login');
    }

    public function loginAdmin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->is_admin == 1) {
                return redirect()->intended('dashboard')
                        ->with(['success' => 'Logged-in']);
            } else {
                Session::flush();
                Auth::logout();
                return Redirect('/login');
            }

        }
        return redirect("/login")->with(['warning' => 'Credentials are wrong.']);
    }

    public function loginMember(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $field = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        // $credentials = $request->only('email', 'password');
        if (Auth::attempt(array($field => $input['email'], 'password' => $input['password']))) {
            if (Auth::user()->is_admin == 0) {
                return redirect()->intended('IDO')
                        ->with(['success' => 'Logged-in']);
            } else {
                Session::flush();
                Auth::logout();
                return Redirect('/');
            }
        }
        return redirect("/")->with(['warning' => 'Credentials are wrong.']);
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'email|unique:users',
            'password' => 'required|min:6',
            'wallet_address' => 'required|unique:users',
            'username_telegram' => 'required|unique:users'
        ]);
        $data = $request->all();
        $check = $this->createUser($data);
        return redirect("/")->with(['success' => 'Successfully logged-in!']);
    }

    public function createUser(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'wallet_address' => $data['wallet_address'],
            'username_telegram' => $data['username_telegram']
          ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
}

