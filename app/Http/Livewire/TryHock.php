<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TryHock extends Component
{
    public $count = 0;


    public function mount(){
        dump('This Function for mount');
    }

    public function updating(){
        dump('This Function for updating');
    }
    public  function increment(){
        $this->count++;
        dump('this is increment');
    }
    public function render()
    {
        dump('This Function for Render');

        return view('livewire.try-hock');
    }
}
