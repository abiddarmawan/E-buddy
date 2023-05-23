<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index(){

        return view('login.index');
    }
    public function auth(Request $request){
        
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
           
            if(auth()->user()->is_admin){
                return redirect()->intended('/market');
            }
           
            return redirect()->intended('/homepage');
        };

        return back()->with('loginError','Login Failed');
    }

    public function logout(Request $request){
        
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
