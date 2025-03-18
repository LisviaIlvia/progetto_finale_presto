<div>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10">
        <div class="card shadow-lg border-0 p-4 article-detail">
          <div class="row g-4 align-items-center">
            <div class="col-12 col-md-6 mb-3">
              <!-- Carosello Bootstrap -->
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://picsum.photos/400" class="d-block w-100" alt="Immagine 1">
                  </div>
                  <div class="carousel-item">
                    <img src="https://picsum.photos/400" class="d-block w-100" alt="Immagine 2">
                  </div>
                  <div class="carousel-item">
                    <img src="https://picsum.photos/400" class="d-block w-100" alt="Immagine 3">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <!-- Testo -->
            <div class="col-12 col-md-6">
              <h2 class="display-5 fw-bold text-danger">{{ $ad->title }}</h2>
              <p><span class="fw-bold">{{ __('ui.author') }}:</span> {{ $ad->user->name }}</p>
              <h4 class="text-muted fw-semibold mt-2">€{{ number_format($ad->price, 2, ',', '.') }}</h4>
              <p class="mt-3 article-text text-secondary fs-5">{{ $ad->description }}</p>

              <div class="mt-4 d-flex gap-3">
                <a href="{{ route('index.ad') }}" class="btn btn-outline-danger btn-lg px-4">
                  <i class="fas fa-arrow-left"></i> {{__('ui.back_to_ads')}}
                </a>
                <a href="#" class="btn btn-danger btn-lg px-4">
                  <i class="fas fa-shopping-cart"></i> {{__('ui.contact_seller')}}
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
