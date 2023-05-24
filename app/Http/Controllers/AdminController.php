<?php

namespace App\Http\Controllers;
use App\Models\Pesan;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AdminController extends Controller
{
    //

    public function index(){

        return view('menu.index');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nama_makanan' => 'required|max:20',
            'harga' => 'required|max:50',
            'image' => 'required|image|file|max:1024',
            'deskripsi' => 'required|max:500',
            'jumlah_barang' => 'required'
        ]);

        $validateData['image'] = $request->file('image')->store('menu-image');
        Menu::create($validateData);

        return redirect('/menuform')->with('succes','Berhasil Menambahkan Menu');
        

    }
    public function delete(Request $request){
        
        $pesan = Pesan::where('menu_id', $request->menu)->get();

        foreach ($pesan as $item) {
            $item->status = 'Barang Tidak Tersedia';
            $item->save();
        }
        $menus = Menu::where('id',$request->menu)->get();
        foreach ($menus as $i) {
            Storage::delete($i->image);
        };

        
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
            $validateData['image'] = $request->file('image')->store('image-menu');
        };

        $id = $request->id;

        Menu::where('id',$request->id)
             ->update($validateData);

        return redirect("/menu/edit/${id}");
       
    }
    public function order(){
        $menu = Pesan::where('status','Barang Tidak Tersedia')->get();

        return view('riwayatorder.index',[
            'menus' => $menu
        ]);
    }
}
