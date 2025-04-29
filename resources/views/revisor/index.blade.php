<x-layout>
    <x-display-message />
    <x-display-error />

    <div class="container py-5">
        @if ($ad_to_check)
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-warning">{{ __('ui.revisor_dashboard') }}</h1>
        </div>

        <div class="row g-5 align-items-start">
            <!-- Sezione Immagini e Labels -->
            <div class="col-12 col-lg-7">
                <div class="row g-4">
                    @foreach ($ad_to_check->images as $key => $image)
                        <div class="col-12">
                            <div class="card border-0 shadow rounded-4 overflow-hidden">
                                <div class="row g-0 align-items-center">
                                    <div class="col-md-5 d-flex align-items-center justify-content-center " style="min-height: 300px;">
                                        <img src="{{ $image->getUrl(300, 300) }}" class="img-fluid rounded shadow" alt="Image {{ $key + 1 }}" style="object-fit: cover; max-height: 280px; width: auto;">
                                    </div>

                                    <div class="col-md-7 p-4">
                                        <!-- Labels -->
                                        <h5 class="fw-bold mb-3">{{ __('ui.labels') }}</h5>
                                        @if ($image->labels)
                                            <div class="d-flex flex-wrap gap-2 mb-4" style="max-height: 150px; overflow-y: auto;">
                                                @foreach ($image->labels as $label)
                                                    <span class="badge bg-secondary">#{{ $label }}</span>
                                                @endforeach
                                            </div>
                                        @else
                                            <p class="fst-italic text-muted">{{ __('ui.no_labels') }}</p>
                                        @endif

                                        <!-- Ratings -->
                                        <h5 class="fw-bold mb-3">{{ __('ui.ratings') }}</h5>
                                        @php
                                            $ratings = [
                                                'Adult' => $image->adult,
                                                'Violence' => $image->violence,
                                                'Spoof' => $image->spoof,
                                                'Racy' => $image->racy,
                                                'Medical' => $image->medical,
                                            ];
                                        @endphp

                                        @foreach ($ratings as $rating => $iconClass)
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="bi {{ $iconClass }} me-2 fs-5"></i>
                                                <span>{{ ucfirst($rating) }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Sezione Dettagli Annuncio -->
            <div class="col-12 col-lg-5">
                <div class="card border-0 shadow-lg rounded-4 p-5 bg-light">
                    <h2 class="fw-bold mb-3">{{ $ad_to_check->title }}</h2>
                    <p class="text-muted mb-2">{{ __('ui.author') }}: <strong>{{ $ad_to_check->user->name }}</strong></p>
                    <h3 class="text-success fw-bold mb-3">&euro;{{ number_format($ad_to_check->price, 2, ',', '.') }}</h3>
                    <p class="mb-4">{{ $ad_to_check->description }}</p>

                    <!-- Pulsanti -->
                    <div class="d-flex gap-3">
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
            <h1 class="display-5  mb-4">{{ __('ui.no_items_uploaded') }}</h1>
            <a href="{{ route('homepage') }}" class="btn btn-warning px-5 py-2">{{ __('ui.back_to_homepage') }}</a>
        </div>
        @endif
    </div>
</x-layout>