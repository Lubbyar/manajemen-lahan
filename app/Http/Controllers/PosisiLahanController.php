<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posisi;

class PosisiLahanController extends Controller
{
    public function index(){
        $list_posisi = posisi::query();
        $list_posisi = $list_posisi->paginate(10);
        return view('validasi.index', compact('list_posisi'));
    }

    public function validasi(Request $request, Posisi $posisi){
        return view('validasi.validate', compact('posisi'));
    }

    public function store(Request $request, Posisi $posisi){
        $data =  $request->validate([
            'validasi' => 'required'
        ]);
        $posisi->update($data);
        return redirect()->route('validasi.index');
    }

    public function authorisasiIndex(){
        $list_posisi = Posisi::query();
        $list_posisi->where('validasi', true);
        $list_posisi = $list_posisi->paginate(10);
        return view('validasi.authorisasi', compact('list_posisi'));
    }

    public function slipPencairanIndex(){
        $list_posisi = Posisi::query();
        $list_posisi->where('authorisasi', true);
        $list_posisi = $list_posisi->paginate(10);
        return view('validasi.slip', compact('list_posisi'));
    }
    public function authorizePosisi(Request $request, Posisi $posisi){
        $posisi->authorisasi = true;
        $posisi->save();

        return redirect()->back();
    }


    public function cetakSlip(Request $request, Posisi $posisi){
        return view('laporan.slip', compact('posisi'));
    }
}
