<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    //
    public function store(Request $request,Menu $menu){

        $harga = floatval(str_replace('.', '', $menu->harga));

        $totalHarga = $harga * $request->total_barang;
        $total_harga= number_format($totalHarga, 0, ',', '.');
        
        $pesan = [
            'user_id' => auth()->user()->id,
            'menu_id' => $menu->id,
            'total_barang' => $request->total_barang,
            'total_harga' => $total_harga,
            'status'      => "Barang Tersedia"
        ];
        $id = $menu->id;

        $pesan = Pesan::create($pesan);
        
        return redirect("/order/${id}");
        

    }
}
