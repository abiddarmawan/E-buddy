<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    public function index(){

        return view('register.index');
    }

    public function store(Request $request){

        $validateData = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:25'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);
        // $request->session()->flash('success','Registrasion successfull!! Please Login');
        return redirect('/login')->with('success','Registrasion successfull!! Please Login');
    }
}
