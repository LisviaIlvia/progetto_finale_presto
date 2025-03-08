<div class="container py-5 position-relative">
  <x-display-message />

  <div class="row justify-content-center">
    <div class="col-lg-10 col-xl-9">
      <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
        <div class="card-body p-5">
          <h3 class="text-center mb-4 text-primary display-6">Inserisci Annuncio</h3>

          <form wire:submit="store" >
            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input wire:model="title" type="text" class="form-control" id="title">
              <div class="text-danger">@error('title') {{ $message }} @enderror</div>
            </div>

            <div class="mb-3">
              <label for="price" class="form-label">Prezzo</label>
              <div class="input-group">
                <input wire:model="price" type="text" class="form-control" id="price" placeholder="0.00">
                <span class="input-group-text">€</span>
              </div>
              <div class="text-danger">@error('price') {{ $message }} @enderror</div>
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Descrizione</label>
              <textarea wire:model="description" class="form-control" id="description" rows="4"></textarea>
              <div class="text-danger">@error('description') {{ $message }} @enderror</div>
            </div>

            <hr class="my-4">

            <!-- Immagini Multiple -->
            <div class="mb-3">
              <label for="images" class="form-label fw-bold"><i class="bi bi-upload"></i> Immagini</label>
              <input wire:model="images" type="file" class="form-control" id="images" accept="image/*" multiple>
              <div class="text-danger">@error('images.*') {{ $message }} @enderror</div>

              <div wire:loading wire:target="images" class="mt-4">Uploading...</div>
              @if ($images)
              @foreach ($images as $image)
              <div>
              <img src="{{ $image->temporaryUrl() }}" alt="Preview Image" class="py-4" style="max-width: 20%; height: 50%;">
              </div>
              @endforeach
              @endif
            </div>

            <hr class="my-4">

            <!-- Categoria -->
            <h5 class="mb-3">Seleziona una categoria:</h5>
            <div class="d-flex flex-wrap gap-2">
              @foreach($tags as $tag)
              <div class="form-check">
                <input class="form-check-input" type="radio" wire:model="tag_id" id="tag{{ $tag->id }}" value="{{ $tag->id }}">
                <label class="form-check-label" for="tag{{ $tag->id }}">
                  {{ $tag->name }}
                </label>
              </div>
              @endforeach
            </div>

            <hr class="my-4">

            <div class="d-grid">
              <button class="btn btn-primary btn-lg fw-bold text-uppercase" type="submit">
                <i class="fas fa-upload"></i> Pubblica
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>