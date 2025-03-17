<div>
    <!-- Annunci -->
    <section class="container my-5">
        <h2 class="text-center text-white display-6 mb-5">Annunci</h2>
        <div class="row justify-content-center align-items-center py-5">
            @forelse($ads as $ad)
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <x-ad-card :ad="$ad" />
            </div>
            @empty
            <div class="col-12 text-center">
                <h3 class="display-6 text-white">
                    Non sono ancora stati caricati articoli
                </h3>
                @auth
                <a href="{{ route('create.ad') }}" class="btn btn-danger my-5">Pubblica un annuncio</a>
                @endauth
            </div>
            @endforelse
            <div class="d-flex justify-content-center">
                <div>
                    {{ $ads->links() }}
                </div>
            </div>
        </div>
    </section>
</div>