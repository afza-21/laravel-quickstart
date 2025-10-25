<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Table extends Component
{
       public $sortBy = 'id';
    public $sortDir = 'DESC';
    public function add(){
        // dd('opem');
        $this->dispatch('openModal', 'user.add');
    }
      public function setSortby($sortByField)
    {
        if ($this->sortBy === $sortByField) {
            $this->sortDir = ($this->sortDir == "ASC" ? 'DESC' : 'ASC');
        }
        $this->sortBy = $sortByField;
    }
    public function render()
    {
        $items = User::paginate(10);
        
        return view('livewire.user.table', ['items' => $items]);
    }
}
