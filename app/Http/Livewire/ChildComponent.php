<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChildComponent extends Component
{

<<<<<<< HEAD
    public $childName='Hello the child component';

=======
    public $ChildName;
>>>>>>> 19a5cd81da9f4648ab9195cb9ecb078b24dbb2a8
    public function render()
    {
        return view('livewire.child-component');
    }
}
