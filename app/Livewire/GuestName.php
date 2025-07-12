<?php

namespace App\Livewire;

use Livewire\Component;

class GuestName extends Component
{
    public $guest_name;

    public function render()
    {
        return view('livewire.guest-name');
    }
}
