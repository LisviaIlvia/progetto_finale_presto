<x-layout>
    <x-display-message />
    <x-display-error />
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-12">
                <div class="rounded shadow bg-body-secondary p-4 mb-5">
                    <h1 class="display-5 text-center pb-3">{{__('ui.revisor_dashboard')}}</h1>
                </div>
            </div>
        </div>

        @if ($ad_to_check)
            <div class="row justify-content-center pt-4">
                <!-- Colonna sinistra con immagini -->
                <div class="col-12 col-md-6 col-lg-7">
                    <div class="row">
                        @for ($i = 0; $i < 6; $i++)
                            <div class="col-6 col-md-4 mb-4 text-center">
                                <img src="https://picsum.photos/300" alt="immagine segnaposto" class="img-fluid rounded shadow">
                            </div>
                        @endfor
                    </div>
                </div>

                <!-- Colonna destra con dettagli dell'annuncio -->
                <div class="col-12 col-md-6 col-lg-4 ps-4 d-flex flex-column justify-content-between">
                    <div>
                        <h1>{{ $ad_to_check->title }}</h1>
                        <h3>{{__('ui.author')}}: {{ $ad_to_check->user->name }}</h3>
                        <h4>{{ $ad_to_check->price }}€</h4>
                        <p class="h6">{{ $ad_to_check->description }}</p>
                    </div>

                    <div class="d-flex pb-4 justify-content-around">
                        <!-- Bottone Rifiuta -->
                        <form action="{{ route('reject', ['ad' => $ad_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-danger py-2 px-5 fw-bold w-100 w-md-auto">{{__('ui.reject')}}</button>
                        </form>

                        <!-- Bottone Accetta -->
                        <form action="{{ route('accept', ['ad' => $ad_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-success py-2 px-5 fw-bold w-100 w-md-auto">{{__('ui.accept')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div class="row justify-content-center align-items-center height-custom text-center">
                <div class="col-12">
                    <h1 class="fst-italic display-4 text-white">{{__('ui.no_items_uploaded')}}</h1>
                    <a href="{{ route('homepage') }}" class="mt-5 btn btn-success">{{__('ui.back_to_homepage')}}</a>
                </div>
            </div>
        @endif
    </div>
</x-layout>
