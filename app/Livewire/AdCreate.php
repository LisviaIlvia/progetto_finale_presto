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

    #[Validate('required', message: 'validation.custom.title.required')]
    public $title = '';

    #[Validate('required|numeric|decimal:2', message: [
        'required' => 'validation.custom.price.required',
        'numeric' => 'validation.custom.price.numeric',
        'decimal' => 'validation.custom.price.decimal',
    ])]
    public $price = '';

    #[Validate('required', message: 'validation.custom.description.required')]
    public $description = '';

    #[Validate('required', message: 'validation.custom.tag.required')]
    public $tag_id = null;

    public $images = [];
    public $temporary_images = []; // Inizializzo come array vuoto

    public function updatedTemporaryImages()
    {
        // Validazione normale
        if ($this->validate([
            'temporary_images.*' => 'image|max:2048', // 2MB
            'temporary_images' => 'max:6',
        ], [
            'temporary_images.*.image' => __('validation.custom.temporary_images.image'),
            'temporary_images.*.max' => __('validation.custom.temporary_images.max_size'),
        ])) {
            // Aggiungi solo immagini valide
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }


    public function store()
    {
        $this->validate();

        $ad = Ad::create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'user_id' => Auth::id(),
            'tag_id' => $this->tag_id,
        ]);

        foreach ($this->images as $image) {
            $ad->images()->create(['path' => $image->store('images', 'public')]);
        }

        $this->reset();

        session()->flash('message', __('validation.custom.success'));
    }

    public function removeImage($key)
    {
        if (array_key_exists($key, $this->images)) {
            unset($this->images[$key]);
        }
    }

    public function render()
    {
        return view('livewire.ad-create', ['tags' => Tag::all()]);
    }
}
