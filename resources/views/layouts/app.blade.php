<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ComicsGhost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    @yield('css')
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .dropdown-item:active {
            color: #ffffff; 
            background-color: black;
        }
    </style>
</head>

<body style="font-family: 'Wix Madefor Display', sans-serif;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm px-4">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center gap-2" href="/">
                <img src="{{ asset('assets/image/comicsghostlogo.jpg') }}" alt="Logo" class="logo-ghost"
                    style="width: 30px; height: 30px;">
                <span class="fw-bold">ComicsGhost</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"
                style="padding: 0.25rem 0.5rem; font-size: 1rem;">
                <span class="navbar-toggler-icon" style="width: 1.5em; height: 1.5em;"></span>
            </button>

            <!-- Links da navbar -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item"><a class="nav-link text-dark" href="/generos">Gêneros</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="/#destaques">Itens em Destaque</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="/#todos">Todos os Itens</a></li>
                </ul>
            </div>
            @guest
                <div class="dropdown d-none d-lg-block">
                    <a id="navbarDropdown" class="btn btn-outline-dark rounded-pill dropdown-toggle" href="#"
                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Entrar
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/cadastro">Cadastro</a>
                        <a class="dropdown-item" href="/login">Login</a>
                    </div>
                </div>
            @else
                <div class="dropdown">
                    <a id="navbarDropdown" class="btn btn-outline-dark rounded-pill dropdown-toggle" href="#"
                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Perfil
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/perfil">Meus dados</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Sair
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            @endguest
        </div>
    </nav>

    <div>
        @yield('content')
    </div>

    <footer class="text-center py-4">
        <p class="mb-0">© Time unides7 2025</p>
        <a href="#" class="text-dark"><i class="bi bi-github"></i></a>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('script')
</body>

</html>
