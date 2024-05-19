<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChildComponent extends Component
{

    public $childName='Hello the child component';

    public function render()
    {
        return view('livewire.child-component');
    }
}
