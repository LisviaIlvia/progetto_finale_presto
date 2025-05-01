<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-12 col-lg-10">
      <div class="card shadow-lg border-0 p-4 article-detail rounded-4">
        <div class="row g-4 align-items-center">
          <!-- Carosello Immagini -->
          <div class="col-12 col-md-6 mb-3">
            @if ($ad->images->count() > 0)
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                @foreach ($ad->images as $key => $image)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" class="@if($loop->first) active @endif" aria-label="Slide {{ $key + 1 }}"></button>
                @endforeach
              </div>
              
              <div class="carousel-inner rounded-4 shadow-sm overflow-hidden">
                @foreach ($ad->images as $key => $image)
                <div class="carousel-item @if($loop->first) active @endif">
                  <img src="{{ $image->getUrl() }}" class="d-block w-100" alt="Immagine {{ $key + 1 }} dell'articolo {{ $ad->title }}" style="object-fit: cover; border-radius: 10px;">
                </div>
                @endforeach
              </div>

              @if ($ad->images->count() > 1)
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              @endif
            </div>
            @else
            <img src={{ asset('/img/segnaposto.jpg') }} class="img-fluid rounded-4 shadow-sm" alt="Nessuna foto inserita dall'utente">
            @endif
          </div>

          <!-- Testo e dettagli annuncio -->
          <div class="col-12 col-md-6">
            <h2 class="display-6 fw-bold text-warning">{{ $ad->title }}</h2>
            <p class="text-muted"><strong>{{ __('ui.author') }}:</strong> {{ $ad->user->name }}</p>
            <h4 class="fw-semibold text-dark mt-2">€{{ number_format($ad->price, 2, ',', '.') }}</h4>
            <p class="mt-3 article-text text-secondary fs-5">{{ $ad->description }}</p>

            <div class="mt-4 d-flex gap-3">
              <a href="{{ route('index.ad') }}" class="btn btn-outline-warning btn-lg px-4 shadow-sm rounded-3">
                <i class="fas fa-arrow-left"></i> {{__('ui.back_to_ads')}}
              </a>
              <a href="#" class="btn btn-warning btn-lg px-4 shadow-sm rounded-3">
                <i class="fas fa-shopping-cart"></i> {{__('ui.contact_seller')}}
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
