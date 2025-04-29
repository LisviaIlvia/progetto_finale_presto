<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <a class="navbar-brand text-warning fw-bold" href="{{ route('homepage') }}">
            Presto.it
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <!-- Home -->
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="{{ route('homepage') }}">{{ __('ui.home') }}</a>
                </li>

                <!-- Annunci -->
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="{{ route('index.ad') }}">{{ __('ui.ads') }}</a>
                </li>

                <!-- Categorie -->
                <li class="nav-item dropdown me-3">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('ui.categories') }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($tags as $tag)
                        <li>
                            <a class="dropdown-item" href="{{ route('byCategory', ['tag' => $tag]) }}">
                                {{ __("ui.$tag->name") }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>

                @auth
                <!-- Pubblica Annuncio -->
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="{{ route('create.ad') }}">{{ __('ui.post_ad') }}</a>
                </li>

                <!-- Zona Revisione -->
                @if (Auth::user()->is_revisor)
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="{{ route('revisor.index') }}">
                        {{ __('ui.review_area') }}
                        <span class="badge bg-warning">{{ \App\Models\Ad::toBeRevisedCount() }}</span>
                    </a>
                </li>
                @endif
                @endauth
            </ul>

            <ul class="navbar-nav align-items-center">
                @guest
                <!-- Registrati -->
                <li class="nav-item me-2">
                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('ui.register') }}</a>
                </li>

                <!-- Login -->
                <li class="nav-item me-2">
                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('ui.login') }}</a>
                </li>
                @else
                <!-- Utente loggato -->
                <li class="nav-item dropdown me-3">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('ui.logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest

                <!-- Multilingua -->
                <li class="nav-item me-2">
                    <x-_locale lang="it" />
                </li>
                <li class="nav-item me-2">
                    <x-_locale lang="en" />
                </li>
                <li class="nav-item me-2">
                    <x-_locale lang="es" />
                </li>

                <!-- Ricerca -->
                <li class="nav-item">
                    <form class="d-flex mx-3" role="search" method="GET" action="{{ route('ad.search') }}">
                        <div class="input-group">
                            <input class="form-control rounded-start" type="search" name="query" placeholder={{__('ui.search_placeholder')}} aria-label="Search">
                            <button class="btn btn-light border" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>