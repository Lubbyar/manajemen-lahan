<?php

namespace App\Http\Livewire\Tanaman;

use App\Models\Tanaman;
use App\Models\Lahan;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Create extends Component
{
    public $lokasi;
    public $lahans;
    public $dokumen;
    public $jenis_tanah;
    public $jenis_tanaman;
    public $pemilik_tanaman;
    public $petani_penggarap;
    public $lintang_selatan;
    public $bujur_timur;
    // public $sertifikat;
    // public $ajb;
    // public $lokasi;
    // public $kwitansi;
    // public $luas;
    // public $status;
    // public $tgl_jb;
    // public $jualdari;
    // public $jenis_tanah;
    // public $jenis_tanam;
    // public $pemilik_tanam;
    // public $petani;
    // public $diatas;
    // public $kemiringan;

    protected $rules = [
        'lokasi'             => 'required',
        'dokumen'            => 'required',
        'jenis_tanah'        => 'required',
        'jenis_tanaman'      => 'required',
        'pemilik_tanaman'    => 'required',
        'petani_penggarap'   => 'required',
        'lintang_selatan'    => 'required',
        'bujur_timur'        => 'required',
        // 'sertifikat' => 'required',
        // 'ajb' => 'required',
        // 'lokasi' => 'required',
        // 'kwitansi' => 'required',
        // 'luas' => 'required',
        // 'status' => 'required',
        // 'tgl_jb' => 'required',
        // 'jualdari' => 'required',
        // 'jenis_tanah' => 'required',
        // 'jenis_tanam' => 'required',
        // 'pemilik_tanam' => 'required',
        // 'petani' => 'required',
        // 'diatas' => 'required',
        // 'kemiringan' => 'required'

    ];

    public function simpan(){
        $data = $this->validate();
        try{
            // session()->dispatchBrowserEvent('show-message', [
                //     'type' => 'success',
                //     'message' => "Data lahan berhasil dibuat"
                // ]);
            Tanaman::create($data);
            return redirect()->to(route('tanaman.index'))->with('sukses', 'Data Lahan Tanaman Berhasil Ditambahkan!!');
        }catch (\Exception $exception){
            Log::error($exception->getMessage());
        }
    }
    public function render()
    {
        $data = ([
            'lahans' => Lahan::get(),
            'tanamans' => Tanaman::get(),
        ]);
        return view('livewire.tanaman.create',$data);
    }
}
