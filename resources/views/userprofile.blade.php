<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lista de Favoritos</title>

  <!-- Bootstrap e fontes -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Estilos locais -->
  <link rel="stylesheet" href="style.css">
  <link href="{{ asset('css/userprofile.css') }}" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

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
        <a href="/cadastro" class="btn btn-outline-dark rounded-pill">Minha Conta</a>
      </div>
    </div>
  </nav>

  <!-- Header do usuário -->
  <section class="bg-dark text-white py-5">
    <div class="container d-flex align-items-center">
      <img src="{{ asset('assets/image/perfil.png') }}" alt="Avatar" class="rounded-circle me-3" width="60" height="60">
      <div>
        <h5 class="mb-0">{{ $perfil[0]->username }}</h5>
        <small>{{ $perfil[0]->email }}</small>
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
              <img src="assets/image/home/hqs/h1.webp" class="card-img-top" alt="Invincible">
              <div class="card-body">
                <h6 class="card-title fw-bold mb-1">Invincible #144</h6>
                <p class="card-text small">The end of all things</p>
                <span class="badge bg-primary mb-2">Ação</span><br>
                <a href="#" class="btn btn-danger btn-sm">Veja mais</a>
              </div>
            </div>
            <!-- Card 2 -->
            <div class="card" style="width: 14rem;">
              <img src="assets/image/home/hqs/miles_morales_1.jpg" class="card-img-top" alt="Spider-Man">
              <div class="card-body">
                <h6 class="card-title fw-bold mb-1">Spider-Man: Miles Morales #1</h6>
                <span class="badge bg-primary me-1">Ação</span>
                <span class="badge bg-info text-dark">Aventura</span><br>
                <a href="#" class="btn btn-danger btn-sm mt-2">Veja mais</a>
              </div>
            </div>
            <!-- Card 3 -->
            <div class="card" style="width: 14rem;">
              <img src="assets/image/home/hqs/flash.jpg" class="card-img-top" alt="Flash">
              <div class="card-body">
                <h6 class="card-title fw-bold mb-1">Flash: Os Novos 52!</h6>
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
              <img src="assets/image/home/hqs/batman_amaldicoado.png" class="card-img-top" alt="Batman">
              <div class="card-body">
                <h6 class="card-title fw-bold mb-1">Batman: Amaldiçoado</h6>
                <span class="badge bg-dark text-white">Drama</span><br>
                <a href="#" class="btn btn-danger btn-sm mt-2">Veja mais</a>
              </div>
            </div>
            <!-- Card 5 -->
            <div class="card" style="width: 14rem;">
              <img src="assets/image/home/hqs/watchmen.jpg" class="card-img-top" alt="Watchmen">
              <div class="card-body">
                <h6 class="card-title fw-bold mb-1">Watchmen</h6>
                <span class="badge bg-success">Mistério</span><br>
                <a href="#" class="btn btn-danger btn-sm mt-2">Veja mais</a>
              </div>
            </div>
            <!-- Card 6 -->
            <div class="card" style="width: 14rem;">
              <img src="assets/image/home/hqs/joker.webp" class="card-img-top" alt="Joker">
              <div class="card-body">
                <h6 class="card-title fw-bold mb-1">Joker: A Piada Mortal</h6>
                <span class="badge bg-danger">Drama</span><br>
                <a href="#" class="btn btn-danger btn-sm mt-2">Veja mais</a>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Controles do carrossel -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselFavoritos" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselFavoritos" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
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
</body>
</html>
