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
    <p class="text-muted mb-4">Confira os HQs mais curtidos dos últimos tempos! Em breve, você também poderá adicionar
      os seus favoritos.</p>

    <!-- Card 1 -->
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gx-5 justify-content-center">

        <div class="col-md-6 col-lg-6">
          <div class="d-flex bg-light rounded shadow-sm h-100">
            <img src="{{ asset('assets/image/home/hqs/h1.webp') }}" alt="HQ" class="img-fluid me-3 rounded"
              style="width: 120px;">
            <div class="d-flex py-3 flex-column justify-content-between">
              <div>
                <h5 class="fw-bold mb-1">Invincible #144</h5>
                <p class="text-muted mb-2">The end of all things</p>
                <span class="badge bg-info me-1">Drama</span>
                <span class="badge bg-warning text-darkme-1">Fantasia</span>
              </div>
              <a href="#" class="btn btn-danger btn-sm mt-2 align-self-start">Veja mais</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6">
          <div class="d-flex bg-light rounded shadow-sm h-100">
            <img src="{{ asset('assets/image/home/hqs/h3.webp') }}" alt="HQ" class="img-fluid me-3 rounded"
              style="width: 120px;">
            <div class="d-flex py-3 flex-column justify-content-between">
              <div>
                <h5 class="fw-bold mb-1">Homem-Aranha #1</h5>
                <p class="text-muted mb-2">Miles Morales</p>
                <span class="badge bg-success me-1">Ficção</span>
              </div>
              <a href="#" class="btn btn-danger btn-sm mt-2 align-self-start">Veja mais</a>
            </div>
          </div>
        </div>

 <div class="col-md-6 col-lg-6">
          <div class="d-flex bg-light rounded shadow-sm h-100">
            <img src="{{ asset('assets/image/home/hqs/h4.webp') }}" alt="HQ" class="img-fluid me-3 rounded"
              style="width: 120px;">
            <div class="d-flex py-3 flex-column justify-content-between">
              <div>
                <h5 class="fw-bold mb-1">Batman: A piada mortal</h5>
                <p class="text-muted mb-2">Do premiado roteirista Alan Moore</p>
                <span class="badge bg-success me-1">Ficção</span>
                <span class="badge bg-danger me-1">Heróis</span>
              </div>
              <a href="#" class="btn btn-danger btn-sm mt-2 align-self-start">Veja mais</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6">
          <div class="d-flex bg-light rounded shadow-sm h-100">
            <img src="{{ asset('assets/image/home/hqs/h2.webp') }}" alt="HQ" class="img-fluid me-3 rounded"
              style="width: 120px;">
            <div class="d-flex py-3 flex-column justify-content-between">
              <div>
                <h5 class="fw-bold mb-1">X-Men '97</h5>
                <p class="text-muted mb-2">Grandes X-Pectativas</p>
                <span class="badge bg-danger me-1">Heróis</span>
                <span class="badge bg-secondary me-1">Clássico</span>
              </div>
              <a href="#" class="btn btn-danger btn-sm mt-2 align-self-start">Veja mais</a>

            </div>
          </div>
        </div>
      </div>
    </div>

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