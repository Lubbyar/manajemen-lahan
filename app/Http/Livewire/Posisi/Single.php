<?php

namespace App\Http\Livewire\Posisi;

use App\Models\Posisi;
use Livewire\Component;

class Single extends Component
{
    public $index;
    public $posisi;
    

    public function mount(Posisi $posisi){
        $this->posisi = $posisi;
    }

    public function hapus(){
        $this->posisi->delete();
        $this->emit('posisiDeleted');
    }

    public function render()
    {
        return view('livewire.posisi.single');
    }
}
