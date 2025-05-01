<?php

namespace App\Livewire;

use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\Component;
use App\Models\Ad;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
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
    #[Validate('required', message: 'validation.custom.temporary_images.required')]
    #[Validate('max:6', message: 'validation.custom.temporary_images.max')]
        public $temporary_images = []; // Inizializzo come array vuoto

    public function updatedTemporaryImages()
    {
        // Validazione normale
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024', // 2MB
            'temporary_images' => 'array|max:6',
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

        if (count($this->images) > 0) {
            foreach ($this->images as $image) {
                $newFileName = "ad/{$ad->id}";
                $newImage = $ad->images()->create(['path' => $image->store($newFileName, 'public')]);
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 300, 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
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
