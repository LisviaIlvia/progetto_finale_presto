<div class="container d-flex justify-content-center align-items-center min-vh-100 my-5">
  <x-display-message />

  <div class="col-md-8">
    <div class="card border-0 shadow-lg">
      <div class="card-body bg-light p-5" style="min-height: 600px;">

        <h2 class="text-center text-warning mb-5">{{ __('ui.post_ad') }}</h2>

        <form wire:submit.prevent="store">
          
          <!-- Titolo -->
          <div class="form-floating mb-4">
            <input type="text" id="title" wire:model.blur="title" class="form-control @error('title') is-invalid @enderror" placeholder="{{__('ui.title')}}">
            <label for="title">{{__('ui.title')}}</label>
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
          </div>

          <!-- Prezzo -->
          <div class="form-floating mb-4">
            <input type="number" step="0.01" id="price" wire:model.blur="price" class="form-control @error('price') is-invalid @enderror" placeholder="{{__('ui.price')}}">
            <label for="price">{{__('ui.price')}} (€)</label>
            @error('price') <small class="text-danger">{{ $message }}</small> @enderror
          </div>

          <!-- Descrizione -->
          <div class="form-floating mb-4">
            <textarea id="description" wire:model.blur="description" class="form-control @error('description') is-invalid @enderror" style="height: 120px;" placeholder="{{__('ui.description')}}"></textarea>
            <label for="description">{{__('ui.description')}}</label>
            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
          </div>

          <!-- Immagini -->
          <div class="mb-4">
            <label class="form-label fw-bold">{{ __('ui.photo') }}</label>
            <input wire:model.live="temporary_images" type="file" class="form-control @error('temporary_images') is-invalid @enderror" multiple accept="image/*">
            @error('temporary_images') <small class="text-danger">{{ $message }}</small> @enderror
            @error('temporary_images.*') <small class="text-danger">{{ $message }}</small> @enderror
          </div>

          @if (!empty($images))
          <div class="row mt-3">
            <p class="fw-bold">{{ __('ui.preview_images') }}</p>
            @foreach ($images as $key => $image)
            <div class="col-4 mb-2">
              <div class="position-relative">
                <img src="{{ $image->temporaryUrl() }}" alt="Preview" class="img-fluid rounded shadow-sm">
                <button type="button" wire:click="removeImage({{ $key }})" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            @endforeach
          </div>
          @endif

          <!-- Categoria -->
          <p class="mb-3 fw-bold">{{__('ui.category')}}</p>
            <div class="text-danger">@error('tag_id') {{ $message }} @enderror</div>
            <div class="d-flex flex-wrap gap-2">
              @foreach($tags as $tag)
              <div class="form-check">
                <input class="form-check-input" type="radio" wire:model="tag_id" id="tag{{ $tag->id }}" value="{{ $tag->id }}">
                <label class="form-check-label" for="tag{{ $tag->id }}">
                  {{__("ui.$tag->name")}}
                </label>
              </div>
              @endforeach
            </div>

            <hr class="my-4">

          <!-- Pulsante Pubblica -->
          <div class="d-grid">
            <button type="submit" class="btn btn-dark text-warning fw-bold">
              {{__('ui.publish')}}
            </button>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>
