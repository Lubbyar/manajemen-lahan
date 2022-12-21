<?php

namespace App\Http\Livewire\Tanaman;

use App\Models\Tanaman;
use Livewire\Component;

class Single extends Component
{
    public $tanaman;
    public $index;

    public function mount(Tanaman $tanaman){
        $this->tanaman = $tanaman;
    }

    public function hapus(){
        $this->tanaman->delete();
        $this->emit('tanamanDeleted');
    }

    public function render()
    {
        return view('livewire.tanaman.single');
    }
}
