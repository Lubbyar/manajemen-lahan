<?php

namespace App\Http\Livewire\Posisi;

use App\Models\Lahan;
use App\Models\Posisi;
use Livewire\Component;

class Create extends Component
{
    public $lahan_id;
    // public $tanggal_pinjam;
    public $garis_lintang;
    public $garis_bujur;
    public $mdpl;
    public $status;

    protected $rules = [
        'lahan_id' => 'required',
        // 'tanggal_pinjam' => 'required|date',
        'garis_lintang' => 'required|string',
        'garis_bujur' => 'required|string',
        'mdpl' => 'required|string'
        
    ];

    public function simpan(){
        $data = $this->validate();
        $data["garis_bujur"];
        $data["garis_lintang"];
        $data["mdpl"];

        try {
            Posisi::create($data);
            $this->dispatchBrowserEvent('show-message', [
                'type' => 'success',
                'message' => 'Berhasil menambahkan lahan posisi',
            ]);
        }catch (\Exception $err){
            $this->dispatchBrowserEvent('show-message', [
                'type' => 'error',
                'message' => 'Gagal menambahkan posisi lahan',
            ]);
        }
    }
    public function render()
    {
        $list_lahan = Lahan::all();
        return view('livewire.posisi.create', compact('list_lahan'));
    }
}
