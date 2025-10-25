<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AzSearchNull extends Component
{
    /**
     * Create a new component instance.
     */public $search  ;
    public function __construct($search)
    {
        $this->search = $search;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.az-search-null');
    }
}
