<?php

namespace App\Http\Livewire\Lahan;

use App\Models\Lahan;
use Livewire\Component;

class Index extends Component
{
    public $long, $lat;

    public $search;
    protected $queryString = ['search'=> ['except' => '']];
    protected $listeners = [
        'lahanDeleted'
    ];

    public function lahanDeleted(){
        $this->dispatchBrowserEvent('show-message', [
            "type"=>"success",
            "message" => "Lahan Berhasil Di Hapus"
        ]);
    }

    public function render()
    {
        $list_lahan = Lahan::orderBy('nama', 'asc')->orderBy('created_at','asc')->paginate(10);

        if ($this->search !== null){
            $list_lahan = Lahan::where('dokumen','like','%' . $this->search . '%')->paginate(10);
        }
        $this->emit('lahanStore');
        // $list_lahan = Lahan::query();
        // $list_lahan = $list_lahan->paginate(10);
        return view('livewire.lahan.index', ['list_lahan' => $list_lahan]);
        // return view('livewire.lahan.index', compact('list_lahan'));
    }

}
