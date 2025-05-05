<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lista de Favoritos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="{{ asset('css/userprofile.css') }}" rel="stylesheet">
</head>
<body style="background-color: #f9f9f9;">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="assets/image/comicsghostlogo.jpg" alt="Logo" width="30" height="30" class="me-2 rounded-circle">
        <span class="fw-bold">ComicsGhost</span>
      </a>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">Gêneros</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Itens em Destaque</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Todos os Itens</a></li>
        </ul>
        <a href="#" class="btn btn-outline-dark ms-3">Entrar →</a>
      </div>
    </div>
  </nav>

  <!-- Header do usuário -->
  <section class="bg-secondary text-white py-4">
    <div class="container d-flex align-items-center">
      <img src="{{ asset('assets/image/perfil.png') }}" alt="Avatar" class="rounded-circle me-3" width="60" height="60">
      <div>
        <h5 class="mb-0">Usuário</h5>
        <small>email@gmail.com</small>
      </div>
    </div>
  </section>

  
  <!-- Conteúdo principal -->
  <div class="d-flex flex-wrap justify-content-start gap-4">
    <main class="container py-5">
      <h3 class="fw-bold mb-2">Lista de Favoritos</h3>
      <p class="text-muted mb-4">Esta seção é nosso cantinho preferido. Qual vai ser a sua próxima obsessão?</p>
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
<!-- Item 1 -->
<div class="carousel-item active">
          <div class="card d-flex flex-row align-items-center p-3 mx-auto" style="max-width: 700px;">
            <img src="{{ asset('assets/image/home/hqs/hq1.png') }}" alt="HQ1" class="img-fluid me-3 rounded" style="width: 150px;">
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


  <!-- Rodapé -->
  <footer class="text-center py-4">
    <p class="mb-0">© Time unides7 2025</p>
    <a href="#" class="text-dark"><i class="bi bi-github"></i></a>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
