<nav class="navbar nav navbar-expand-lg navbar-dark bg-danger shadow">
<div class="container-fluid d-flex justify-content-between align-items-center">
        <a class="navbar-brand fw-bold text-white brand-name" href="{{ route('homepage') }}">
            <i class="fas fa-bolt"></i> Presto
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item me-2">
                    <a class="nav-link text-white" href="{{ route('homepage') }}">
                        <i class="fas fa-home"></i> {{__('ui.home')}}
                    </a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-white" href="{{ route('index.ad') }}">
                        <i class="fas fa-bullhorn"></i> {{__('ui.ads')}}
                    </a>
                </li>
                <li class="nav-item dropdown me-2">
                    <button class="btn text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    {{__('ui.categories')}}
                    </button>
                    <ul class="dropdown-menu ">
                        @foreach ($tags as $tag)
                        <li><a class="dropdown-item" href="{{ route('byCategory', ['tag' => $tag]) }}">
                        {{ __("ui.$tag->name") }}</a>
                        </li>
                        @if (!$loop->last)
                        <hr class="dropdown-divider">
                        @endif
                        @endforeach
                    </ul>
                </li>
            </ul>

            <ul class="navbar-nav">
                @guest
                <li class="nav-item me-2">
                    <a class="nav-link text-white" href="{{ route('register') }}">
                        <i class="fas fa-user-plus"></i> {{__('ui.register')}}
                    </a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-white" href="{{ route('login') }}">
                        <i class="fas fa-sign-in-alt"></i> {{__('ui.login')}}
                    </a>
                </li>
                @endguest
                @auth
                <li class="nav-item me-2">
                    <a class="nav-link text-white " href="{{ route('create.ad') }}">
                        <i class="fas fa-upload"></i> {{__('ui.post_ad')}}
                    </a>
                </li>
                @if (Auth::user()->is_revisor)
                <li class="nav-item me-2">
                    <a class="nav-link text-white me-4" href="{{ route('revisor.index') }}">
                    {{__('ui.review_area')}}
                        <span class="badge bg-primary me-2">{{ \App\Models\Ad::toBeRevisedCount() }}</span>
                    </a>
                </li>
                @endif
                <li class="nav-item dropdown me-2">
                    <a class="nav-link dropdown-toggle text-white " href="#" id="userDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i> {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> {{__('ui.logout')}}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth
            </ul>
            <!-- FORM DI RICERCA -->
            <form class="d-flex mx-3" role="search" method="GET" action="{{ route('ad.search') }}">
                <div class="input-group">
                    <input class="form-control rounded-start" type="search" name="query" placeholder={{__('ui.search_placeholder')}} aria-label="Search">
                    <button class="btn btn-light border" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
            <x-_locale lang="it"/>
            <x-_locale lang="en"/>
            <x-_locale lang="es"/>
        </div>
    </div>
</nav>