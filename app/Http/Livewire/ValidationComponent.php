<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ValidationComponent extends Component
{

    public $email;

    public $password;
    public $remember;

    protected $rules = [
        'email'=> 'required|min:3|max:10',
        'password'=> 'required|min:3|max:10',
        'remember'=> 'nullable',
    ];

    public function updated(){

        $this->validate();

    }

    public function submit(){

        $this->validate();

    }

    protected $messages =

         [
            'email.required'=>'أسم الموظف مطلوب',
            'email.min'=>'يجب ان يكون أسم الموظف أكثر من 3 أحرف',
            'email.max'=>'يجب ان يكون أسم الموظف أقل من 10 حرف',
            ########################################################
            'password.required'=>'حقل الموبايل مطلوب',
            'password.min'=>'يجب ان يكون حقل الموبايل 3 رقم',
            'password.max'=>'يجب ان يكون حقل الموبايل 10 رقم',
            ########################################################
        ];


    public function render()
    {
        return view('livewire.validation-component');
    }
}
