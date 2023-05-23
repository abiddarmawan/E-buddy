<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\Pesan;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    //

    public function index(){
        return view('market.index',[
            'menus' => Menu::all()
        ]);

    }

    public function delete(Request $request){
        $pesan = Pesan::where('menu_id', $request->menu)->get();

        foreach ($pesan as $item) {
            $item->status = 'Barang Tidak Tersedia';
            $item->save();
        }
        Menu::find($request->menu)->delete();
        return redirect('/market');
    }

    public function edit(Menu $menu){

        return view('edit.index',[
            'menu' => $menu
        ]);
    }
    public function update(Request $request){

        $validateData = $request->validate([
            'nama_makanan' => 'required|max:10',
            'harga' => 'required|max:50',
            'image' => 'image|file|max:1024',
            'deskripsi' => 'required|max:50',
            'jumlah_barang' => 'required'
        ]);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->id);
            }
            $validateData['image'] = $request->file('image')->store('post-menu');
        };

        $id = $request->id;

        Menu::where('id',$request->id)
             ->update($validateData);

        return redirect("/menu/edit/${id}");
       
    }
}
