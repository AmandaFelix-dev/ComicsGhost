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
  <!-- Conteúdo principal -->
  <div class="container my-5 w-100">
    <div class="row align-items-start">
      
      <!-- Capa da HQ -->
      <div class="col-md-4 text-center">
      <img src="{{ asset('assets/image/home/hqs/hq4.png') }}" alt="HQ4"class="img-fluid rounded shadow">
      </div>

      <!-- Informações da HQ -->
      <div class="col-md-8 mt-4 mt-md-0">
        <h2><strong>Homem-Aranha: História de Vida</strong></h2>

        <p><strong>Descrição:</strong></p>
        <p>
        Em Amazing Fantasy 15, de 1962, Peter Parker, um garoto de 15 anos, é picado por uma aranha irradiada e se torna o Espetacular Homem-Aranha! Cinquenta e oito anos se passaram no mundo real desde então — o que aconteceria se o mesmo tempo passasse para Peter? Chip Zdarsky e Mark Bagley se unem para uma abordagem única — contar a história da vida inteira do Homem-Aranha, com todos os eventos-chave das décadas em que ele viveu. Da Guerra do Vietnã, passando pelas Guerras Secretas e a Guerra Civil dos super-heróis, chegando ao que pode ser a última missão de um idoso Cabeça de Teia. Prepare-se para ver
        </p>

        <!-- Gêneros -->
        <div class="mb-3">
          <span class="badge bg-primary me-2">Ação</span>
          <span class="badge bg-info text-dark">Aventura</span>
        </div>

        <!-- Autor e lançamento -->
        <div class="d-flex align-items-center mb-4">
        <img src="{{ asset('assets/image/autor.png') }}" class="rounded-circle me-2" width="40">
          <div>
            <p class="mb-0"><strong>Autor</strong></p>
            <small class="text-muted">data de lançamento</small>
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
        <h4 class="mb-3">
          <b><span class="fs-4">📌</span> Onde Comprar</b>
        </h5>
        <p class="mb-1">Amazon</p>
        <a href="#" target="_blank" class="text-decoration-none text-secondary">Link</a>
        
        <hr class="my-3 w-50">
        
        <p class="mb-1">Reboot</p>
        <a href="#" target="_blank" class="text-decoration-none text-secondary">Link</a>
      </div>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
