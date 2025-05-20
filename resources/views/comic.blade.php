<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ComicsGhost | HQ</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link href="{{ asset('css/comic.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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


  <!-- Conteúdo principal -->
  <div class="container my-5">
    <div class="row g-5">

      <!-- Capa da HQ -->
      <div class="col-md-4 text-center">
        <img src="{{ asset('/assets/image/home/hqs/' . $hq->imagens) }}" 
             alt="{{ $hq->titulo }}" 
             class="img-fluid rounded shadow" 
             style="width: 100%; max-width: 300px; height: auto;">
      </div>

      <!-- Informações da HQ -->
      <div class="col-md-8">
        <!-- Título -->
        <h2 class="fw-bold">{{ $hq->titulo }}</h2>

        <!-- Descrição -->
        <div class="mb-4" style="max-width: 700px;">
          <p><strong>Descrição:</strong></p>
          <p class="text-start">{{ $hq->descricao }}</p>
        </div>

        <!-- Gêneros -->
        <div class="mb-3">
          @foreach(explode(',', $hq->generos) as $genero)
            <span class="badge bg-primary me-2">{{ trim($genero) }}</span>
          @endforeach
        </div>

        <!-- Autor e Lançamento -->
        <div class="d-flex align-items-center mb-4">
          <img src="{{ asset('assets/image/autor.png') }}" class="rounded-circle me-2" width="40">
          <div>
            <p class="mb-0"><strong>Autor:</strong> {{ $hq->autor }}</p>
            <small class="text-muted">Lançamento: {{ $hq->lancamento }}</small>
          </div>
        </div>

        <!-- Botão Favoritar -->
        <button class="btn btn-dark">
          Favoritos <i class="bi bi-bookmark ms-1"></i>
        </button>
      </div>
    </div>

    <!-- Onde Comprar -->
    <div class="row mt-5">
      <div class="col">
        <h5 class="mb-3">
          <span class="fs-4">📌</span> Onde Comprar
        </h5>
        <p class="mb-1">Amazon</p>
        <a href="https://www.amazon.com/Miles-Morales-Homem-Aranha-vol-Portuguese-ebook/dp/B08X8R6P3W?utm_source=chatgpt.com" class="text-decoration-none">Link</a>
        <p class="mt-3 mb-1">Reboot</p>
        <a href="#" class="text-decoration-none">Link</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
