<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProfileController extends Controller
{
    //

    public function index(){

        return view('profile.index',[
            'user' => User::firstwhere('id',auth()->user()->id)
        ]);

        
    }

    public function update(Request $request,User $user){
        
       
        $validateData = $request->validate([
            'name' => 'required|max:10',
            'nomor_telpon' => 'max:12',
            'image' => 'image|file|max:1024',

        ]);

        if($request->name === $user->name && $request->nomot_telpon === $user->nomor_telpon && $request->image === $user->image && $request->alamat === $user->alamat && $request->kode_pos === $user->kode_pos){
            return redirect('/profile');
        }
        
        if($request->file('image')){
            if($user->image){
                Storage::delete($user->image);
            }
            $validateData['image'] = $request->file('image')->store('post-image');
        }

        $validateData['alamat'] = $request->alamat;
        $validateData['kode_pos'] = $request->kode_pos;
        

        
        User::where('id',$user->id)
                    ->update($validateData);

        return redirect('/profile')->with('succes','Berhasil Update Profile');;
    
    }

    public function delete(Request $request,User $user){
        if(!$user->image){
            return redirect('/profile');
        };
        Storage::delete($request->oldImage);
        
        $user->image = null;
        $user->save();


        return redirect('/profile')->with('succes','Berhasil Menghapus photo profile');
        
    }
}
