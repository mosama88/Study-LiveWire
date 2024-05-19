<?php

namespace App\Livewire;

use Livewire\Component;

class TestActions extends Component
{
    public $count = 0;
    public $active = true;

    public function increment(){
        $this->count++;
//        dd("this is increment" );
    }

    public function decrement(){
//        dd("this is increment");
        $this->count--;
    }

    public function render()
    {
        return view('livewire.test-actions');
    }
}
