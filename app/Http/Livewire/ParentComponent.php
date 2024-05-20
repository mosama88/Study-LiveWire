<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
    public $parentComponent = "Hello Iam Mohamed Osama";
    public $myChildern = ['Retal','Abd ElRahman', 'Makkah'];

    public function render()
    {
        return view('livewire.parent-component');
    }
}
