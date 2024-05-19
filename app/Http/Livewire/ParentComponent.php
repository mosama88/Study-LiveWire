<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
    public $parentName='Hello the parent component';


    public function render()
    {
        return view('livewire.parent-component');
    }
}
