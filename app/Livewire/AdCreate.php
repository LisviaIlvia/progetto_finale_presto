<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ad;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;

use Livewire\WithFileUploads;

class AdCreate extends Component
{
    use WithFileUploads;

    // Costanti per i messaggi di validazione
    public const VALIDATION_MESSAGES = [
        'title_required' => 'validation.custom.title.required',
        'price_required' => 'validation.custom.price.required',
        'price_numeric' => 'validation.custom.price.numeric',
        'price_decimal' => 'validation.custom.price.decimal',
        'description_required' => 'validation.custom.description.required',
        'images_required' => 'validation.custom.images.required',
        'tag_required' => 'validation.custom.tag.required',
        'success' => 'validation.custom.success'
    ];

    // Variabili per i dati del form
    public $title, $price, $description, $tag_id, $images = [];

    // Funzione di validazione
    protected function rules()
    {
        return [
            'title' => 'required',
            'price' => 'required|numeric|decimal:2',
            'description' => 'required',
            'tag_id' => 'required',
            'images' => 'required|array',
            'images.*' => 'image|max:2048', // Per ogni immagine
        ];
    }

    // Funzione di validazione personalizzata con i messaggi
    protected function messages()
    {
        return [
            'title.required' => __('validation.custom.title.required'),
            'price.required' => __('validation.custom.price.required'),
            'price.numeric' => __('validation.custom.price.numeric'),
            'price.decimal' => __('validation.custom.price.decimal'),
            'description.required' => __('validation.custom.description.required'),
            'tag_id.required' => __('validation.custom.tag.required'),
            'images.required' => __('validation.custom.images.required'),
            'images.*.image' => __('validation.custom.images.image'),
            'images.*.max' => __('validation.custom.images.max'),
        ];
    }


    public function store()
    {
        $this->validate();



        // Verifica se è stato selezionato un tag
        if (!$this->tag_id) {
            session()->flash('error', __('validation.custom.tag.required'));
            return;
        }


        $ad = Ad::create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'user_id' => Auth::user()->id,
            'tag_id' => $this->tag_id,  // Assegna il tag_id scelto
        ]);

        if (is_array($this->images)) {
            foreach ($this->images as $image) {
                $path = $image->store('images', 'public');
                // Salva il percorso nella tabella delle immagini
                $ad->images()->create([
                    'path' => $path
                ]);
            }
        }

        $this->reset();

        session()->flash('message', __('validation.custom.success'));
    }

    public function render()
    {
        // Passa i tag alla vista per permettere la selezione
        $tags = Tag::all();
        return view('livewire.ad-create', compact('tags'));
    }
}
