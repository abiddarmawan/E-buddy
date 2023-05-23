<?php

namespace App\Http\Controllers;
use App\Models\Berat;
use App\Models\User;
use Illuminate\Http\Request;

class CatatanController extends Controller
{
    //
    public function __construct(private User $user){
        
    }
    public function index(User $user){
       
       $user =  $this->user->with('berat')->where('id',auth()->user()->id)->get();
    
        return view('catatan.index',[
            'users' => $user
        ]);
    }
    public function delete(Request $request,Berat $berat){
        $id = auth()->user()->id;
        Berat::find($request->berat_id)->delete();
        return redirect("/histori/${id}");
    }
}
