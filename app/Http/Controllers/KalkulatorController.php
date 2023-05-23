<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berat;
class KalkulatorController extends Controller
{
    //
    public function index (){

        return view('calculator.index');
    }

    public function store(Request $request){
       
        $validateData = $request->validate([
            'berat_badan' => 'required|integer|max:200',
            'tinggi_badan' => 'required|integer|max:300'

        ]);

        $status = '';
        $tinggibadanjadi = $request->tinggi_badan / 100;
   
        $a = $request->berat_badan / ($tinggibadanjadi * $tinggibadanjadi);
        $b = floatval($a);
        $hasil = number_format($b, 2);

        if ($hasil < 17) {
            $status = 'Sangat Kurus';
        } else if ($hasil > 17.0 && $hasil <= 18.5) {
            $status = 'kurus';
        } else if ($hasil > 18.5 && $hasil <= 25.0) {
            $status = 'Normal';
        } else if ($hasil > 25.0 && $hasil <= 27.0) {
            $status = 'OverWeight';
        } else if ($hasil > 27.0) {
            $status = 'Obesitas';
        }

        $validateData['total'] = $hasil;
        $validateData['status'] = $status;
        $validateData['user_id'] = auth()->user()->id;  
        
        Berat::create($validateData);
        $id = auth()->user()->id;
        
        return redirect("/histori/${id}")->with('succes','kamu berhasil menambahkan index masa tubuh badan!!');

        

    }
}
