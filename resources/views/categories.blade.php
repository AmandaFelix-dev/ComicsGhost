<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Categorias | ComicsGhost</title>

  <!-- Bootstrap e fontes -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="{{ asset('css/categories.css') }}" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm px-4">
  <a class="navbar-brand d-flex align-items-center gap-2" href="#">
    <img src="{{ asset('assets/image/comicsghostlogo.jpg') }}" alt="Logo" class="logo-ghost">
    <span class="fw-bold">ComicsGhost</span>
  </a>
  <div class="collapse navbar-collapse justify-content-center">
    <ul class="navbar-nav gap-4">
      <li class="nav-item"><a class="nav-link text-dark" href="#">Gêneros</a></li>
      <li class="nav-item"><a class="nav-link text-dark" href="#">Itens em Destaque</a></li>
      <li class="nav-item"><a class="nav-link text-dark" href="#">Todos os Itens</a></li>
    </ul>
  </div>
  <button class="btn btn-outline-dark rounded-pill">Entrar →</button>
</nav>

<!-- Banner -->
<div class="container py-5">
  <div class="row align-items-center mb-5">
    <div class="col-md-6 text-start">
      <h1 class="fw-bold">Descubra histórias que combinam com seu estilo!</h1>
      <p class="text-muted">
        Aqui você encontra HQs organizadas por gêneros, desde super-heróis até aventuras intensas.
        Escolha seu favorito e mergulhe em um universo de emoções!
      </p>

      <!-- Dropdown de gêneros -->
      <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownGeneros" data-bs-toggle="dropdown" aria-expanded="false">
          Listar gêneros
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownGeneros">
          <li><a class="dropdown-item" href="#acao">Ação</a></li>
          <li><a class="dropdown-item" href="#suspense">Suspense</a></li>
          <li><a class="dropdown-item" href="#drama">Drama</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-6 text-center">
      <img src="{{ asset('assets/image/jovenstitasbanner.png') }}" alt="Banner Joventitas" class="banner-img rounded shadow">
    </div>
  </div>
</div>

<!-- Seção Ação -->
<section id="acao" class="genero-section text-center my-5">
  <div class="container">
    <h2 class="fw-bold">Ação</h2>
    <p class="text-muted">Para quem quer explosão, lutas épicas e heróis sob pressão!</p>

    <div id="carouselHqs" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

<!-- Item 1 -->
        <div class="carousel-item active">
          <div class="card d-flex flex-row align-items-center p-3 mx-auto" style="max-width: 700px;">
            <img src="{{ asset('assets/image/home/hqs/hq1.png') }}" alt="HQ1" class="img-fluid me-3 rounded" style="width: 120px;">
            <div class="card-body">
              <h5 class="card-title fw-bold">Invincible #144</h5>
              <p class="card-text">The end of all things</p>
              <span class="badge bg-primary me-2">Ação</span>
              <a href="#" class="btn btn-danger">Veja mais</a>
            </div>
          </div>
        </div>

<!-- Item 2 -->
        <div class="carousel-item">
          <div class="card d-flex flex-row align-items-center p-3 mx-auto" style="max-width: 700px;">
            <img src="{{ asset('assets/image/home/hqs/hq4.png') }}" alt="HQ4" class="img-fluid me-3 rounded" style="width: 120px;">
            <div class="card-body">
              <h5 class="card-title fw-bold">Spider-Man: Miles Morales #1</h5>
              <p class="card-text">Miles Morales #1</p>
              <span class="badge bg-primary me-2">Ação</span>
              <span class="badge bg-secondary me-2">Aventura</span>
              <a href="#" class="btn btn-danger">Veja mais</a>
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="carousel-item">
          <div class="card d-flex flex-row align-items-center p-3 mx-auto" style="max-width: 700px;">
            <img src="{{ asset('assets/image/home/hqs/hq6.png') }}" alt="HQ6" class="img-fluid me-3 rounded" style="width: 120px;">
            <div class="card-body">
              <h5 class="card-title fw-bold">Flash #3</h5>
              <p class="card-text">Gorilla Warfare</p>
              <span class="badge bg-primary me-2">Ação</span>
              <span class="badge bg-secondary me-2">Aventura</span>
              <a href="#" class="btn btn-danger">Veja mais</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Botões -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselHqs" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselHqs" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
  </div>
</section>

<!-- Seção Suspense -->
<!-- DRAMA -->
<section class="genero-section text-center my-5">
  <div class="container">
    <h2 class="fw-bold">Drama</h2>
    <p class="text-muted">Quando a emoção fala mais alto nas páginas...</p>

    <div id="carouselDrama" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <!-- Item 1 -->
        <div class="carousel-item active">
          <div class="card d-flex flex-row align-items-center p-3 mx-auto" style="max-width: 700px;">
            <img src="{{ asset('assets/image/home/hqs/hq3.png') }}" alt="HQ1" class="img-fluid me-3 rounded-3 shadow-sm" style="width: 120px; height: 160px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title fw-bold">X-Men '97</h5>
              <p class="card-text">Legado e revolução</p>
              <span class="badge bg-warning text-dark">Drama</span>
              <a href="#" class="btn btn-danger">Veja mais</a>
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="carousel-item">
          <div class="card d-flex flex-row align-items-center p-3 mx-auto" style="max-width: 700px;">
            <img src="{{ asset('assets/image/home/hqs/hq7.png') }}" alt="HQ2" class="img-fluid me-3 rounded-3 shadow-sm" style="width: 120px; height: 160px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title fw-bold">Wolverine #12</h5>
              <p class="card-text">Entre a dor e a redenção</p>
              <span class="badge bg-warning text-dark">Drama</span>
              <a href="#" class="btn btn-danger">Veja mais</a>
            </div>
          </div>
        </div>

        <!-- Item 3 (Novo exemplo) -->
        <div class="carousel-item">
          <div class="card d-flex flex-row align-items-center p-3 mx-auto" style="max-width: 700px;">
            <img src="{{ asset('assets/image/home/hqs/hq9.png') }}" alt="HQ3" class="img-fluid me-3 rounded-3 shadow-sm" style="width: 120px; height: 160px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title fw-bold">Um Passeio no Inferno #1</h5>
              <p class="card-text">Um novo tipo de história de terror </p>
              <span class="badge bg-warning text-dark">Drama</span>
              <a href="#" class="btn btn-danger">Veja mais</a>
            </div>
          </div>
        </div>

      </div>

      <!-- Botões -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselDrama" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselDrama" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
  </div>
</section>

<!-- SUSPENSE -->
<section class="genero-section text-center my-5">
  <div class="container">
    <h2 class="fw-bold">Suspense</h2>
    <p class="text-muted">Onde cada virada de página é um novo mistério...</p>

    <div id="carouselSuspense" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <!-- Item 1 -->
        <div class="carousel-item active">
          <div class="card d-flex flex-row align-items-center p-3 mx-auto" style="max-width: 700px;">
            <img src="{{ asset('assets/image/home/hqs/hq2.png') }}" alt="HQ1" class="img-fluid me-3 rounded-3 shadow-sm" style="width: 120px; height: 160px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title fw-bold">Batman #150</h5>
              <p class="card-text">Absolute Power Tie-in</p>
              <span class="badge bg-secondary">Suspense</span>
              <a href="#" class="btn btn-danger">Veja mais</a>
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="carousel-item">
          <div class="card d-flex flex-row align-items-center p-3 mx-auto" style="max-width: 700px;">
            <img src="{{ asset('assets/image/home/hqs/hq5.png') }}" alt="HQ2" class="img-fluid me-3 rounded-3 shadow-sm" style="width: 120px; height: 160px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title fw-bold">Hulk #25</h5>
              <p class="card-text">The Immortal</p>
              <span class="badge bg-secondary">Suspense</span>
              <a href="#" class="btn btn-danger">Veja mais</a>
            </div>
          </div>
        </div>

        <!-- Item 3 (Novo exemplo) -->
        <div class="carousel-item">
          <div class="card d-flex flex-row align-items-center p-3 mx-auto" style="max-width: 700px;">
            <img src="{{ asset('assets/image/home/hqs/hq8.png') }}" alt="HQ3" class="img-fluid me-3 rounded-3 shadow-sm" style="width: 120px; height: 160px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title fw-bold">Nêmesis #Volume único</h5>
              <p class="card-text">Mistério e tensão a cada página</p>
              <span class="badge bg-secondary">Suspense</span>
              <a href="#" class="btn btn-danger">Veja mais</a>
            </div>
          </div>
        </div>

      </div>

      <!-- Botões -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselSuspense" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselSuspense" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
  </div>
</section>

  <!-- Rodapé -->
<!-- <footer class="text-center mt-5 pb-4">
  <div class="footer-content d-flex justify-content-center align-items-center">
    <span>© Time unides7 2025</span>
    <a href="https://github.com/seu-usuario" target="_blank">
      <img src="{{ asset('assets/image/githubicon.png') }}" alt="GitHub" class="ms-2" />
    </a>
  </div>
</footer> -->

<!-- Scripts Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
