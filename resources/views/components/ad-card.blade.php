<div class="card shadow-lg border-0 my-3 mx-auto" style="min-height: 500px; width: 300px;">
    <img src="https://picsum.photos/200" class="card-img-top" alt="Immagine annuncio" style="height: 200px; object-fit: cover;">
    <div class="card-body d-flex flex-column">
        <h4 class="card-title">{{ $ad->title }}</h4>
        <p><span class="fw-bold">{{ __('ui.author') }}:</span> {{ $ad->user->name }}</p>
        @if($ad->tag)
            <div class="mb-2">
               <a href="{{ route('byCategory', ['tag' => $ad->tag]) }}" class="btn badge text-bg-danger">{{ __('ui.' . $ad->tag->name) }}</a> 
            </div>
        @endif
        <p class="card-text fw-bold text-danger">€{{ number_format($ad->price, 2, ',', '.') }}</p>
        <div class="mt-auto">
            <a href="{{ route('show.ad', compact('ad')) }}" class="btn btn-danger w-100">
                <i class="fas fa-eye"></i> {{__('ui.card_discover')}}
            </a>
        </div>
    </div>
</div>