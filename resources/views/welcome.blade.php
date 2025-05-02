<x-layout>
    <x-display-message/>
    <!-- Hero Section -->
    <header class="text-center py-5 ">
        <div class="container-fluid text-center">
            <div class="row vh-100 justify-content-center align-items-center">
                <div class="col-12">
                    <h1 class="display-4">{{ __('ui.welcome') }}</h1>
                    <p class="lead">{{ __('ui.find_or_post') }}</p>
                    @guest
                    <a href="{{ route('register') }}" class="btn btn-warning btn-lg">
                    {{ __('ui.register_now') }}
                    </a>
                    @else
                    <a href="{{ route('create.ad') }}" class="btn btn-warning btn-lg">
                     {{__('ui.post_ad')}}
                    </a>
                    @endguest

                </div>
            </div>
        </div>
    </header>

    <!-- Annunci Recenti -->
    <section class="my-5">
        <h2 class="text-center display-6 mb-5">{{__('ui.latest_ads')}}</h2>
        <div class="container">
            <div class="row gy-5 justify-content-center">
                {{-- Itera solo sugli ultimi 6 annunci --}}
                @forelse($ads as $ad)
                <div class="col-12 col-sm-6 col-md-4 d-flex">
                    <x-ad-card :ad="$ad" />
                </div>
                @empty
                <div class="col-12 text-center my-5">
                    <h3 class="text-muted display-6">
                    {{__('ui.no_ads')}}
                    </h3>
                </div>
                @endforelse
            </div>
        </div>
    </section>

</x-layout>