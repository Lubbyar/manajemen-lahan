<?php

namespace App\Http\Livewire\Auth;

use Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout(){
        Auth::logout();
        $this->redirectRoute('login');
    }
    public function render()
    {
        return view('livewire.auth.logout');
    }
}
