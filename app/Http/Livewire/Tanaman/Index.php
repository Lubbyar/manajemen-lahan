<?php

namespace App\Http\Livewire\Tanaman;

use App\Models\Tanaman;
use Livewire\Component;

class Index extends Component
{
    public $long, $lat;

    public $search;
    protected $queryString = ['search'=> ['except' => '']];
    protected $listeners = [
        'tanamanDeleted'
    ];

    public function tanamanDeleted(){
        $this->dispatchBrowserEvent('show-message', [
            "type"=>"success",
            "message" => "Data Berhasil Di Hapus"
        ]);
    }

    public function render()
    {
        $list_tanaman = Tanaman::orderBy('created_at', 'asc')->paginate(10);
        
        if ($this->search !== null){
            $list_tanaman = Tanaman::where('dokumen','like','%' . $this->search . '%')->paginate(10);
        }
        $this->emit('tanamanStore');
        // $list_lahan = Lahan::query();
        // $list_lahan = $list_lahan->paginate(10);
        return view('livewire.tanaman.index', ['list_tanaman' => $list_tanaman]);
        // return view('livewire.lahan.index', compact('list_lahan'));
    }

}
