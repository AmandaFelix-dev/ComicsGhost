<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lista de Favoritos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

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
  <section class="bg-dark text-white py-5">
    <div class="container d-flex align-items-center">
      <img src="/assets/image/avatar.png" alt="Avatar" class="rounded-circle me-3" width="60" height="60">
      <div>
        <h5 class="mb-0">Usuário</h5>
        <small>email@gmail.com</small>
      </div>
    </div>
  </section>

  <!-- Conteúdo principal -->
  <main class="container py-5">
    <h3 class="fw-bold mb-2">Lista de Favoritos</h3>
    <p class="text-muted mb-4">Esta seção é nosso cantinho preferido. Qual vai ser a sua próxima obsessão?</p>

    <!-- Carrossel de Favoritos -->
    <div id="carouselFavoritos" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="d-flex justify-content-center gap-4">
            <!-- Card 1 -->
            <div class="card" style="width: 14rem;">
              <img src="assets/image/home/hqs/hq1.png" class="card-img-top" alt="Invincible">
              <div class="card-body">
                <h6 class="card-title fw-bold mb-1">Invincible #144</h6>
                <p class="card-text small">The end of all things</p>
                <span class="badge bg-primary mb-2">Ação</span><br>
                <a href="#" class="btn btn-danger btn-sm">Veja mais</a>
              </div>
            </div>
            <!-- Card 2 -->
            <div class="card" style="width: 14rem;">
              <img src="assets/image/home/hqs/hq4.png" class="card-img-top" alt="Spider-Man">
              <div class="card-body">
                <h6 class="card-title fw-bold mb-1">Spider-Man: Miles Morales #1</h6>
                <span class="badge bg-primary me-1">Ação</span>
                <span class="badge bg-info text-dark">Aventura</span><br>
                <a href="#" class="btn btn-danger btn-sm mt-2">Veja mais</a>
              </div>
            </div>
            <!-- Card 3 -->
            <div class="card" style="width: 14rem;">
              <img src="assets/image/home/hqs/" class="card-img-top" alt="Flash">
              <div class="card-body">
                <h6 class="card-title fw-bold mb-1">Flash: Rebirth</h6>
                <span class="badge bg-warning text-dark">Velocidade</span><br>
                <a href="#" class="btn btn-danger btn-sm mt-2">Veja mais</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="d-flex justify-content-center gap-4">
            <!-- Card 4 -->
            <div class="card" style="width: 14rem;">
              <img src="assets/image/home/hqs/hq2.png" class="card-img-top" alt="Batman">
              <div class="card-body">
                <h6 class="card-title fw-bold mb-1">Batman: Year One</h6>
                <span class="badge bg-dark text-white">Drama</span><br>
                <a href="#" class="btn btn-danger btn-sm mt-2">Veja mais</a>
              </div>
            </div>
            <!-- Card 5 -->
            <div class="card" style="width: 14rem;">
              <img src="xmen.jpg" class="card-img-top" alt="X-Men">
              <div class="card-body">
                <h6 class="card-title fw-bold mb-1">X-Men: House of X</h6>
                <span class="badge bg-success">Mutantes</span><br>
                <a href="#" class="btn btn-danger btn-sm mt-2">Veja mais</a>
              </div>
            </div>
            <!-- Card 6 -->
            <div class="card" style="width: 14rem;">
              <img src="deadpool.jpg" class="card-img-top" alt="Deadpool">
              <div class="card-body">
                <h6 class="card-title fw-bold mb-1">Deadpool: Merc with a Mouth</h6>
                <span class="badge bg-danger">Comédia</span><br>
                <a href="#" class="btn btn-danger btn-sm mt-2">Veja mais</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselFavoritos" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselFavoritos" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </main>

  <!-- Rodapé -->
  <footer class="text-center py-4">
    <p class="mb-0">© Time unides7 2025</p>
    <a href="#" class="text-dark"><i class="bi bi-github"></i></a>
  </footer>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      console.log("Página de perfil carregada.");
    });
    console.log('UserProfile pronto!');
  </script>
</body>
</html>
