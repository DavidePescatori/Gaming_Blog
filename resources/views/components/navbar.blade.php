<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark navbar-dark p-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">Gaming Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('game.create') }}">Inserisci un videogioco</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('game.index') }}">Lista videogiochi inseriti</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('console.index') }}">Lista console inserite</a>
                </li>

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bentornat* {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profilo</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                            <form id="form-logout" method="POST" action="{{ route('logout') }}" class="d-none">@csrf</form>
                        </ul>
                    </li>

                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenut* Ospite
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                           
                        </ul>
                    </li>

                @endauth


            </ul>
        </div>
     </div>
</nav>