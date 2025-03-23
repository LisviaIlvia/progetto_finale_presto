<x-layout>
    <x-display-message />
    <x-display-error />
    
    <div class="container py-5">
        @if ($ad_to_check)
            <div class="text-center mb-4">
                <h1 class="display-5 fw-bold text-white">{{ __('ui.revisor_dashboard') }}</h1>
            </div>
            
            <div class="row g-4 align-items-start">
                <!-- Immagini annuncio -->
                <div class="col-12 col-lg-7">
                    <div class="row g-3">
                        @if ($ad_to_check->images->count())
                            @foreach ($ad_to_check->images as $key => $image)
                                <div class="col-6 col-md-4">
                                    <img src="{{ $image->getUrl(300, 300) }}" class="rounded shadow img-fluid" alt="immagine {{ $key + 1 }} dell'articolo {{ $ad_to_check->title }}">
                                </div>
                            @endforeach
                        @else
                            @for ($i = 0; $i < 6; $i++)
                                <div class="col-6 col-md-4">
                                    <img src={{ asset('/img/segnaposto.jpg') }} alt="immagine segnaposto" class="rounded shadow img-fluid">
                                </div>
                            @endfor
                        @endif
                    </div>
                </div>
                
                <!-- Dettagli annuncio -->
                <div class="col-12 col-lg-5">
                    <div class="p-4 shadow rounded bg-light">
                        <h2 class="text-dark">{{ $ad_to_check->title }}</h2>
                        <p class="text-muted">{{ __('ui.author') }}: <strong>{{ $ad_to_check->user->name }}</strong></p>
                        <h3 class="text-success fw-bold">{{ $ad_to_check->price }}€</h3>
                        <p class="mt-3">{{ $ad_to_check->description }}</p>
                        
                        <!-- Pulsanti azione -->
                        <div class="d-flex gap-3 mt-4">
                            <form action="{{ route('reject', ['ad' => $ad_to_check]) }}" method="POST" class="w-50">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-danger w-100 fw-bold">{{ __('ui.reject') }}</button>
                            </form>
                            
                            <form action="{{ route('accept', ['ad' => $ad_to_check]) }}" method="POST" class="w-50">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-success w-100 fw-bold">{{ __('ui.accept') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="d-flex flex-column align-items-center justify-content-center vh-75">
                <h1 class="display-4 text-white fw-bold">{{ __('ui.no_items_uploaded') }}</h1>
                <a href="{{ route('homepage') }}" class="btn btn-primary mt-4 px-4 py-2">{{ __('ui.back_to_homepage') }}</a>
            </div>
        @endif
    </div>
</x-layout>
