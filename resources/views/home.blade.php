<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ComicsGhost</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ asset('css/home.css') }}" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400..800&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Wix Madefor Display', sans-serif;">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-white shadow-sm px-4">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center gap-2" href="/">
        <img src="{{ asset('assets/image/comicsghostlogo.jpg') }}" alt="Logo" class="logo-ghost" style="width: 30px; height: 30px;">
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

      <div class="d-none d-lg-block">
        <a href="/cadastro" class="btn btn-outline-dark rounded-pill">Entrar →</a>
      </div>
    </div>
  </nav>


  <!-- Banner de Topo -->
  <header>
    <div style="background: url('{{ asset('assets/image/home/banner-hq.png') }}') no-repeat center center; background-size: cover; height: 300px;"></div>
  </header>

  <!-- Destaques -->
  <section class="text-center py-5 container" id="destaques">
    <h2 class="fw-bold mb-3">Destaques</h2>
    <p class="text-muted mb-4">Confira as HQs que estão sendo mais comentadas nos últimos tempos!<br> Seja por revivals dos clássicos, entre renascimentos ou polêmicas, confira elas:</p>

    <div id="carouselExampleCaptions" class="container carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/image/home/carousel/Invincible-banner.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>{{ $homes[0]->titulo }}</h5>
            <p>{{ $homes[0]->descricao }}</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/image/home/carousel/Batman-banner.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>{{ $homes[3]->titulo }}</h5>
            <p>{{ $homes[3]->descricao }}</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/image/home/carousel/X-man-97-banner.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>{{ $homes[2]->titulo }}</h5>
            <p>{{ $homes[2]->descricao }}</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div>
  </section>

  <!-- Todos -->
  <section class="container py-2" id="todos">
    
  <section class="pb-5">
    <h2 class="fw-bold mb-4 text-center">Todos</h2>
    <p class="text-muted mb-5 text-center">Confira nossas edições!</p>

    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gx-5 justify-content-center">

        <div class="col-md-6 col-lg-6">
          <div class="d-flex bg-light rounded shadow-sm h-100">
            <img src="{{ asset('assets/image/home/hqs/' . $homes[0]->imagens) }}" alt="HQ1" class="img-fluid me-3 rounded" style="width: 120px;">
            <div class="d-flex py-3 flex-column justify-content-between">
              <div>
                <h5 class="fw-bold mb-1">{{ $homes[0]->titulo }}</h5>
                <p class="text-muted mb-2">{{ $homes[0]->descricao }}</p>
                <span class="badge bg-primary me-1">Ação</span>
              </div>
              <a href="#" class="btn btn-danger btn-sm mt-2 align-self-start">Veja mais</a>
            </div>
          </div>
        </div>


      <div class="col-md-6 col-lg-6">
        <div class="d-flex bg-light rounded shadow-sm h-100">
          <img src="{{ asset('assets/image/home/hqs/' . $homes[1]->imagens) }}" alt="HQ2" class="img-fluid me-3 rounded" style="width: 120px;">
          <div class="d-flex py-3 flex-column justify-content-between">
            <div>
              <h5 class="fw-bold mb-1">{{ $homes[1]->titulo }}</h5>
              <p class="text-muted mb-2">{{ $homes[1]->descricao }}</p>
              <span class="badge bg-info me-1">Drama</span>
              <span class="badge bg-warning text-dark me-1">Fantasia</span>
            </div>
            <a href="#" class="btn btn-danger btn-sm mt-2 align-self-start">Veja mais</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-6">
        <div class="d-flex bg-light rounded shadow-sm h-100">
          <img src="{{ asset('assets/image/home/hqs/' . $homes[2]->imagens) }}" alt="HQ3" class="img-fluid me-3 rounded" style="width: 120px;">
          <div class="d-flex py-3 flex-column justify-content-between">
            <div>
              <h5 class="fw-bold mb-1">{{ $homes[2]->titulo }}</h5>
              <p class="text-muted mb-2">{{ $homes[2]->descricao }}</p>
              <span class="badge bg-success me-1">Ficção</span>
            </div>
            <a href="#" class="btn btn-danger btn-sm mt-2 align-self-start">Veja mais</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-6">
        <div class="d-flex bg-light rounded shadow-sm h-100">
          <img src="{{ asset('assets/image/home/hqs/' . $homes[3]->imagens) }}" alt="HQ4" class="img-fluid me-3 rounded" style="width: 120px;">
          <div class="d-flex py-3 flex-column justify-content-between">
            <div>
              <h5 class="fw-bold mb-1">{{ $homes[3]->titulo }}</h5>
              <p class="text-muted mb-2">{{ $homes[3]->descricao }}</p>
              <span class="badge bg-danger me-1">Heróis</span>
              <span class="badge bg-secondary me-1">Clássico</span>
            </div>
            <a href="#" class="btn btn-danger btn-sm mt-2 align-self-start">Veja mais</a>
          </div>
        </div>
      </div>
    </div>

  <!-- Botão final -->
  <div class="mt-5 text-center">
    <a href="/generos" class="btn btn-dark px-4">
      Listar todos HQs
    </a>
  </div>
</section>


  <!-- Rodapé -->
  <footer class="text-center py-4">
    <p class="mb-0">© Time unides7 2025</p>
    <a href="#" class="text-dark"><i class="bi bi-github"></i></a>
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
