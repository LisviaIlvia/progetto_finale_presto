<div class="card shadow-sm border-0 my-3 mx-auto rounded-4 overflow-hidden" style="min-height: 500px; width: 320px;">
    <!-- Immagine con effetto hover -->
    <div class="position-relative">
        <img src="{{ $ad->images->isNotEmpty() ? Storage::url($ad->images->first()->path) : 'https://picsum.photos/300'}}" 
             class="card-img-top" 
             alt="Immagine annuncio {{ $ad->title }}" 
             style="height: 250px; object-fit: cover; transition: transform 0.3s ease;">
        @if($ad->tag)
            <span class="position-absolute top-0 start-0 m-2 px-3 py-1 rounded-pill text-white bg-danger shadow-sm small">
                {{ __('ui.' . $ad->tag->name) }}
            </span>
        @endif
    </div>
    
    <div class="card-body d-flex flex-column p-4">
        <h4 class="card-title fw-bold text-dark">{{ $ad->title }}</h4>
        <p class="small text-muted mb-2"><i class="fas fa-user"></i> {{ __('ui.author') }}: <strong>{{ $ad->user->name }}</strong></p>
        <p class="fs-4 fw-semibold text-danger mb-3">€{{ number_format($ad->price, 2, ',', '.') }}</p>

        <div class="mt-auto">
            <a href="{{ route('show.ad', compact('ad')) }}" class="btn btn-danger w-100 fw-bold py-2">
                <i class="fas fa-eye"></i> {{__('ui.card_discover')}}
            </a>
        </div>
    </div>
</div>
