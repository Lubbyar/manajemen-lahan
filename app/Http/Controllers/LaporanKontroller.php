<?php

namespace App\Http\Controllers;

use App\Models\Posisi;
use Illuminate\Http\Request;

class LaporanKontroller extends Controller
{
    public function lahan(){
        $list_lahan = Lahan::all();
        return view('laporan.lahan', compact('list_lahan'));
    }
    
    public function posisi(){
        $list_posisi = Posisi::all();
        return view('laporan.posisi', compact('list_posisi'));
    }

}