<?php

namespace App\Http\Livewire\Posisi;

use App\Models\Posisi;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'posisiDeleted',
    ];

    public $long, $lat;

    public function posisiDeleted(){
        $this->dispatchBrowserEvent('show-message',[
            'type' => 'success',
            'message' => 'Data Posisi berhasil di hapus',
        ]);
    }
    public function render()
    {
        $list_posisi = Posisi::query();
        $list_posisi = $list_posisi->paginate(10);
        return view('livewire.posisi.index', compact('list_posisi'));
    }
}
