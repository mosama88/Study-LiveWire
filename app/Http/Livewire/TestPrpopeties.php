<?php

namespace App\Livewire;

use Livewire\Component;

class TestPrpopeties extends Component
{

    public $name ;
//    public $name1;
//    public $name2;
//
//    public $resetName, $resetName2;

//    public $names = ['Moahmed','Reham','Retal','Makkah','Abd ElRahman'];


//public function search(){
//
//}


//public function getFullNameProperty(){
//    return implode(' ', $this->names);
//}

    public function mount()
    {


//        $this->fill([
//            'name'=>'Mohamed Osama',
//            'name1'=>'Reham Ibrahem',
//            'name2'=>'Retal Adbelrhman Makkah',
//            'resetName'=>'Will Be Reset',
//            'resetName2'=>'Will Be Reset2',
//
//        ]);
//     $this->reset('resetName');
//     $this->reset(['resetName','resetName2']);
//        $this->resetExcept('name2');
//        $this->resetExcept(['resetName','resetName2']);

    }

    public function render()
    {
        return view('livewire.test-prpopeties');
    }
}
