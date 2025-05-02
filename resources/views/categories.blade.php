<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Categorias | ComicsGhost</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/categories.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400;700&display=swap "rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


  <style>
    .carousel-control-prev-icon,
.carousel-control-next-icon {
  background-color: rgba(0, 0, 0, 0.5); /* visível em fundo claro */
  border-radius: 50%;
}
  </style>

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
  <!-- Banner Principal -->
  <div class="row align-items-center mb-5">
    <div class="col-md-6 text-start">
      <h1 class="fw-bold">Descubra histórias que combinam com seu estilo!</h1>
      <p class="text-muted">
        Aqui você encontra HQs organizadas por gêneros, desde super-heróis até aventuras intensas.
        Escolha seu favorito e mergulhe em um universo de emoções!
      </p>
      <button class="btn btn-dark d-flex align-items-center">
        Listar gêneros
        <i class="ms-2 bi bi-caret-down-fill"></i> <!-- Bootstrap Icons -->
      </button>
    </div>
    <div class="col-md-6 text-center">
    <img src="{{ asset('assets/image/joventitasbanner.png') }}" alt="Banner Joventitas" class="img-fluid rounded shadow">
    </div>
  </div>

<!-- Categoria -->
<div id="carouselHqs" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <!-- Item 1 -->
    <div class="carousel-item active">
      <div class="card d-flex flex-row align-items-center p-3" style="max-width: 700px; margin: auto;">
        <img src="caminho/para/invincible.jpg" class="img-fluid rounded-start" alt="Invincible" style="width: 200px;">
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
      <div class="card d-flex flex-row align-items-center p-3" style="max-width: 700px; margin: auto;">
        <img src="caminho/para/spiderman.jpg" class="img-fluid rounded-start" alt="Spider-Man" style="width: 200px;">
        <div class="card-body">
          <h5 class="card-title fw-bold">Spider-Man: Miles Morales #1</h5>
          <p class="card-text">Lorem ipsum dolor sit amet</p>
          <span class="badge bg-primary me-2">Ação</span>
          <span class="badge bg-secondary me-2">Aventura</span>
          <a href="#" class="btn btn-danger">Veja mais</a>
        </div>
      </div>
    </div>

    <!-- Adicione mais itens conforme necessário -->

  </div>

  <!-- Botões de navegação -->
   <div></div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselHqs" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselHqs" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>


<!-- Suspense -->
<section class="genero-section text-center my-5">
  <div class="container">
    <h2 class="fw-bold">Suspense</h2>
    <p class="text-muted">Onde cada virada de página é um novo mistério...</p>

    <div class="row justify-content-center">
      <!-- Batman -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card mb-3 mx-auto" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ asset('img/batman.jpg') }}" class="img-fluid rounded-start" alt="Batman">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Batman #150</h5>
                <p class="card-text">Absolute Power Tie-in</p>
                <span class="badge bg-secondary">Suspense</span>
                <a href="#" class="btn btn-danger btn-sm mt-2">Veja mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Hulk -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card mb-3 mx-auto" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ asset('img/hulk.jpg') }}" class="img-fluid rounded-start" alt="Hulk">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Hulk #25</h5>
                <p class="card-text">The Immortal</p>
                <span class="badge bg-secondary">Suspense</span>
                <a href="#" class="btn btn-danger btn-sm mt-2">Veja mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Drama -->
<section class="genero-section text-center my-5">
  <div class="container">
    <h2 class="fw-bold">Drama</h2>
    <p class="text-muted">Quando a emoção fala mais alto nas páginas...</p>

    <div class="row justify-content-center">
      <!-- X-Men 97 -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card mb-3 mx-auto" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ asset('img/xmen97.jpg') }}" class="img-fluid rounded-start" alt="X-Men 97">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">X-Men '97</h5>
                <p class="card-text">Legado e revolução</p>
                <span class="badge bg-warning text-dark">Drama</span>
                <a href="#" class="btn btn-danger btn-sm mt-2">Veja mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Wolverine -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card mb-3 mx-auto" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ asset('img/wolverine.jpg') }}" class="img-fluid rounded-start" alt="Wolverine">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Wolverine #12</h5>
                <p class="card-text">Entre a dor e a redenção</p>
                <span class="badge bg-warning text-dark">Drama</span>
                <a href="#" class="btn btn-danger btn-sm mt-2">Veja mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
