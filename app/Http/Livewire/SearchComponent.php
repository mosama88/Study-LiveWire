<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class SearchComponent extends Component
{

    public $search;

//  protected $queryString = ['search'];

protected $queryString = [       //حتى لايظهر فى الurl بإسم Search
    'search'=>['except'=>'', 'as' =>'Y'],
];

    public function render()
    {
        return view('livewire.search-component',[
            'posts' => Post::where('name','like', '%' 
            . $this->search . '%' )->get(),
        ]);
    }
}
