<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="container">
        <p class="h1 my-5 fw-bold text-white"> Annunci </p>
    <div class="row justify-content-center">
        {{-- Itera su ciascun annuncio --}}
        @foreach ($ads as $ad)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4"> <!-- Impostazione delle colonne -->
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="immagine annuncio">
                    <div class="card-body">
                        <h5 class="card-title">{{ $ad->title }}</h5>
                        <p class="card-text">{{ $ad->price }}</p>
                        <a href="#" class="btn btn-primary">Leggi di più</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


</div>