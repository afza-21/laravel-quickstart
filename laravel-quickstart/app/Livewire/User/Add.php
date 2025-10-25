<?php

namespace App\Livewire\User;

use Livewire\Component;
use LivewireUI\Modal\Contracts\ModalComponent;

class Add extends ModalComponent
{
    public function render()
    {
        return view('livewire.user.add');
    }
}
