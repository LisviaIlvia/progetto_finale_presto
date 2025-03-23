<div class="container position-relative py-5">
  <x-display-message />

  <div class="row justify-content-center">
    <div class="col-lg-10 col-xl-9">
      <div class="card border-0 rounded-4 shadow-lg overflow-hidden">
        <div class="card-body p-5">
          <h3 class="display-6 text-center text-primary mb-4">{{__('ui.post_ad')}}</h3>

          <form wire:submit.prevent="store">
            <div class="mb-3">
              <label for="title" class="form-label fw-bold">{{__('ui.title')}}</label>
              <input wire:model="title" type="text" class="form-control" id="title">
              <div class="text-danger">@error('title') {{ $message }} @enderror</div>
            </div>

            <div class="mb-3">
              <label for="price" class="form-label fw-bold">{{__('ui.price')}}</label>
              <div class="input-group">
                <input wire:model="price" type="text" class="form-control" id="price" placeholder="0.00">
                <span class="input-group-text">€</span>
              </div>
              <div class="text-danger">@error('price') {{ $message }} @enderror</div>
            </div>

            <div class="mb-3">
              <label for="description" class="form-label fw-bold">{{__('ui.description')}}</label>
              <textarea wire:model="description" class="form-control" id="description" rows="4"></textarea>
              <div class="text-danger">@error('description') {{ $message }} @enderror</div>
            </div>

            <hr class="my-4">

            <!-- Immagini Multiple -->
            <div class="mb-3">
              <label for="temporary_images" class="form-label fw-bold">
                {{ __('ui.photo') }}

                <!-- Icona con tooltip -->
                <i class="fa-solid fa-circle-info ms-2 text-primary" data-bs-toggle="tooltip"
                  data-bs-placement="right" title="@lang('ui.photo_info')">
                </i>
              </label>

              <input wire:model.live="temporary_images" type="file"
                class="form-control @error('temporary_images') is-invalid @enderror"
                multiple accept="image/*">

              <div class="text-danger">@error('temporary_images') {{ $message }} @enderror</div>
              <div class="text-danger">@error('temporary_images.*') {{ $message }} @enderror</div>

              <div wire:loading wire:target="temporary_images" class="mt-4">Uploading...</div>

              @if (!empty($images))
              <div class="row mt-3">
                <p class="fw-bold">Anteprima delle immagini:</p>
                @foreach ($images as $key => $image)
                <div class="col-4 mb-2">
                  <div class="position-relative">
                    <img src="{{ $image->temporaryUrl() }}" alt="Anteprima" class="rounded shadow img-fluid">

                    <!-- Pulsante Elimina immagine -->
                    <button type="button" wire:click="removeImage({{ $key }})"
                      class="btn btn-danger btn-sm m-1 position-absolute end-0 top-0">
                      <i class="fa-solid fa-xmark"></i> 
                    </button>
                  </div>
                </div>
                @endforeach
              </div>
              @endif
            </div>



            <hr class="my-4">

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

            <div class="d-grid">
              <button class="btn btn-lg btn-primary text-uppercase fw-bold" type="submit">
                <i class="fa-upload fas"></i> {{__('ui.publish')}}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>