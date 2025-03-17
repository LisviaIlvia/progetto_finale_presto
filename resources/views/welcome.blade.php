<x-layout>
    <x-display-message/>
    <!-- Hero Section -->
    <header class="bg-danger text-white text-center py-5">
        <div class="container">
            <h1 class="fw-bold ">Benvenuto su Presto!</h1>
            <p class="lead">Trova o pubblica annunci in pochi secondi</p>
            @guest
            <a href="{{ route('register') }}" class="btn btn-light btn-lg">
                <i class="fas fa-user-plus"></i> Registrati ora
            </a>
            @else
            <a href="{{ route('create.ad') }}" class="btn btn-light btn-lg">
                <i class="fas fa-upload"></i> Pubblica un annuncio
            </a>
            @endguest
        </div>
    </header>

    <!-- Annunci Recenti -->
    <section class="my-5">
        <h2 class="text-center text-white display-6 mb-5">Ultimi Annunci</h2>
        <div class="container">
            <div class="row">
                {{-- Itera solo sugli ultimi 6 annunci --}}
                @forelse($ads as $ad)
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                    <x-ad-card :ad="$ad" />
                </div>
                @empty
                <div class="col-12">
                    <h3 class="text-center display-6 text-white">
                        Non sono ancora stati caricati articoli
                    </h3>
                </div>
                @endforelse
            </div>
        </div>
    </section>

</x-layout>