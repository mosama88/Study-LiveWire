<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FirstEvent extends Component
{

    protected $listeners = ['fire'=>'ambulance'];

    public function ambulance(){
        dd('يارب يشتغل لان انا زهقت');
    }

    public function render()
    {
        return view('livewire.first-event');
    }
}
