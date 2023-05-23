<?php

namespace App\Http\Controllers;
use App\Models\Pesan;
use App\Models\Menu;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(Request $request){
        
        
        $m = Pesan::where('user_id',auth()->user()->id)->get();
        return view('order.index',[
            'orders' => $m
        ]);

    }
    public function order(Request $request){
        $id = auth()->user()->id;
        $m = Pesan::firstwhere('id',$request->order);
        $menu = Menu::firstwhere('id',$request->id);
     
        if(!$m->user->alamat){
            return redirect("/order/${id}")->with('gagal','Silahkan Masukan Dahulu Alamat');

        }
       
        $menu->jumlah_barang = $m->menu->jumlah_barang - $m->total_barang;
        $m->status = 'Berhasil Order';
        $m->save();
        $menu->save();

       
        return redirect("/order/${id}")->with('succes','Order Berhasil');

    }
    public function delete(Request $request){
        $id = auth()->user()->id;
        Pesan::find($request->order_id)->delete();
        return redirect("/order/${id}")->with('succes','berhasil di hapus');
    }
}
