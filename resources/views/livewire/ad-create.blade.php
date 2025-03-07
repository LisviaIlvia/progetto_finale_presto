
<div>
  <div class="container py-5 position-relative">
    
    <x-display-message/>

    <div class="row justify-content-center">
      <div class="col-lg-10 col-xl-9">
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
          <div class="card-img-left-public d-none d-md-flex">
            <!-- Background image set via CSS -->
          </div>
          <div class="card-body p-5">
            <h3 class="text-center mb-4 fw-bold">Inserisci Annuncio</h3>

            <form wire:submit.prevent="store">
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
</div>
