<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
<<<<<<< HEAD
    public $parentName='Hello the parent component';

=======
    public $parentComponent = "Hello Iam Mohamed Osama";
    public $myChildern = ['Retal','Abd ElRahman', 'Makkah'];
>>>>>>> 19a5cd81da9f4648ab9195cb9ecb078b24dbb2a8

    public function render()
    {
        return view('livewire.parent-component');
    }
}
