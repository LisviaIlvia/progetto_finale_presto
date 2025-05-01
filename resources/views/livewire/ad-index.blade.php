<div>
    <section class="container my-5">
        <!-- Titolo -->
        <div class="text-center mb-5">
            <h2 class="display-4">{{ __('ui.ads') }}</h2>
        </div>

        <!-- Griglia Annunci -->
        <div class="row gy-5 justify-content-center">
            @forelse($ads as $ad)
                <div class="col-12 col-sm-6 col-md-4 d-flex">
                    <x-ad-card :ad="$ad" />
                </div>
            @empty
                <div class="col-12 text-center my-5">
                    <h3 class="display-6 text-muted">{{ __('ui.no_items_uploaded') }}</h3>
                    @auth
                        <a href="{{ route('create.ad') }}" class="btn btn-warning mt-4">
                            {{ __('ui.post_ad') }}
                        </a>
                    @endauth
                </div>
            @endforelse
        </div>

        <!-- Paginazione -->
        <div class="d-flex justify-content-center mt-5">
            {{ $ads->links() }}
        </div>
    </section>
</div>
