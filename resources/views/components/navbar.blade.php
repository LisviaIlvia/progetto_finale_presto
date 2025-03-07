<nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow">
    <div class="container">
        <a class="navbar-brand fw-bold text-white" href="{{ route('homepage') }}">
            <i class="fas fa-bolt"></i> Presto
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('homepage') }}">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('index.ad') }}">
                        <i class="fas fa-bullhorn"></i> Annunci
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('register') }}">
                            <i class="fas fa-user-plus"></i> Registrati
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <a class="nav-link text-white " href="{{ route('create.ad') }}">
                            <i class="fas fa-upload"></i> Pubblica Annuncio
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="userDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
