<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ad;
use App\Models\Tag;  // Aggiungi il modello Tag
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;

class AdCreate extends Component
{
    #[Validate('required', message:'Inserisci un titolo.')] 
    public $title;

    #[Validate('required', message:'Inserisci il prezzo.')] 
    #[Validate('numeric', message:'Il prezzo deve essere un numero.')] 
    #[Validate('decimal:2', message: 'Il prezzo deve avere massimo 2 decimali.')]
    public $price;

    #[Validate('required', message:'Inserisci una descrizione.')] 
    public $description;

    // Aggiungi una variabile per l'ID del tag
    public $tag_id;
    
    public function store() {
        $this->validate();

        // Verifica se è stato selezionato un tag
        if (!$this->tag_id) {
            session()->flash('error', 'Devi selezionare un tag.');
            return;
        }

        Ad::create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'user_id' => Auth::user()->id,
            'tag_id' => $this->tag_id,  // Assegna il tag_id scelto
        ]);

        $this->reset();

        session()->flash('message', 'Annuncio caricato con successo!');
    }

    public function render()
    {
        // Passa i tag alla vista per permettere la selezione
        $tags = Tag::all();
        return view('livewire.ad-create', compact('tags'));
    }
}

