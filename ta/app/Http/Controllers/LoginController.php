<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('home', ['title'=>'Login', 'active'=>'login']);
    }

    public function authenticate(Request $request){
        //@dd($request);

        $validate = $request->validate(
            [
                'nim'=>'required',
                'password'=>'required'
            ]
        );



        if(Auth::attempt($validate)){

            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return back()->with('loginError','Login Gagal, Periksa Kembali Email dan Password');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
