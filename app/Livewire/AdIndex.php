<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ad;
use App\Models\Tag;

class AdIndex extends Component
{

    public function render()
    {
        $tags = Tag::all();
   
        $ads = Ad::orderBy('created_at', 'desc')->paginate(6);

        return view('livewire.ad-index', compact('ads', 'tags'));
    }
}
