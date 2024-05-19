<?php

namespace App\Livewire;

use Livewire\Component;

class Post extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            Hello Post From Inline Component
        </div>
        HTML;
    }
}
