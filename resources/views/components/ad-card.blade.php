<div class="card shadow-lg border-0 my-4 mx-auto overflow-hidden" style="min-height: 400px; width: 320px;">
    <div class="position-relative">
        <img src="{{ $ad->images->isNotEmpty() ? $ad->images->first()->getUrl(300, 300) : asset('/img/segnaposto.jpg') }}" 
             class="card-img-top" 
             alt="Immagine annuncio {{ $ad->title }}" 
             style="height: 300px; object-fit: cover;">
    </div>

    <div class="card-body d-flex flex-column p-4 bg-light">
        <!-- Titolo -->
        <h5 class="card-title text-center fw-bold text-dark mb-2">{{ $ad->title }}</h5>

        <!-- Categoria come link -->
        @if ($ad->tag)
        <div class="text-center mb-3">
            <a href="{{ route('byCategory', ['tag' => $ad->tag]) }}" class="text-warning small text-decoration-none">
                {{ __('ui.' . $ad->tag->name) }}
            </a>
        </div>
        @endif

        <!-- Autore -->
        <p class="text-center text-muted mb-1">{{ __('ui.author') }}: <strong>{{ $ad->user->name }}</strong></p>

        <!-- Prezzo -->
        <h4 class="text-center text-warning fw-bold mb-4">€{{ number_format($ad->price, 2, ',', '.') }}</h4>

        <!-- Bottone -->
        <div class="mt-auto">
            <a href="{{ route('show.ad', compact('ad')) }}" class="btn btn-dark w-100 text-warning fw-bold">
                {{ __('ui.card_discover') }}
            </a>
        </div>
    </div>
</div>
