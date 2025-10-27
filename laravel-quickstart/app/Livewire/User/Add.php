<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Add extends ModalComponent
{
    public $name;
    public $email;
    public $password;
    public static function modalMaxWidth(): string
    {
        return 'xl';
    }
    public function save()
    {
        try {
            $this->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
            ]);
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password),
            ]);
            $this->reset();
            $this->dispatch('closeModal', 'user.add');
            $this->dispatch('alert', [
                'type' => 'success',
                'message' => 'User added successfully!',
            ]);
            $this->dispatch('refreshUserList');
        } catch (\Throwable $th) {
            $this->dispatch('alert', ['type' => 'error', 'message' => $th->getMessage()]);
        }
    }

    public function render()
    {
        return view('livewire.user.add');
    }
}
