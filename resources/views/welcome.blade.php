<x-layout>
    <!-- Hero Section -->
    <header class="bg-danger text-white text-center py-5">
        <div class="container">
            <h1 class="fw-bold">Benvenuto su Presto!</h1>
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

    
</x-layout>
