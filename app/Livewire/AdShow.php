<?php

namespace App\Livewire;

use Livewire\Component;

class AdShow extends Component
{
    public $ad;
    public function render()
    {
        return view('livewire.ad-show');
    }
}
