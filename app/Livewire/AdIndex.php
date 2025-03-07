<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ad;

class AdIndex extends Component
{
    public function render()
    {
        $ads = Ad::all();
        return view('livewire.ad-index', compact('ads'));
    }
}
