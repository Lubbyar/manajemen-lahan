<?php

namespace App\Http\Livewire\Lahan;

use App\Models\Lahan;
use Livewire\Component;

class Single extends Component
{
    public $lahan;
    public $index;

    public function mount(Lahan $lahan){
        $this->lahan = $lahan;
    }

    public function hapus(){
        $this->lahan->delete();
        $this->emit('lahanDeleted');
    }

    public function render()
    {
        return view('livewire.lahan.single');
    }
}
