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
        <!-- Usando o caminho da imagem armazenada no banco -->
        <img src="{{ asset('assets/image/hqs/' . $hq->imagem) }}" alt="{{ $hq->titulo }}" class="img-fluid rounded shadow">
      </div>

      <!-- Informações da HQ -->
      <div class="col-md-8 mt-4 mt-md-0">
        <!-- Título da HQ -->
        <h2><strong>{{ $hq->titulo }}</strong></h2>

        <!-- Descrição da HQ -->
        <p><strong>Descrição:</strong></p>
        <p>{{ $hq->descricao }}</p>

        <!-- Gêneros -->
        <div class="mb-3">
          @foreach(explode(',', $hq->generos) as $genero) 
            <span class="badge bg-primary me-2">{{ $genero }}</span>
          @endforeach
        </div>

        <!-- Autor e lançamento -->
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
        <h4 class="mb-3">
          <b><span class="fs-4">📌</span> Onde Comprar</b>
        </h4>

        <!-- Exibindo os links de compra -->
        @if($hq->link1)
          <p class="mb-1">Amazon</p>
          <a href="{{ $hq->link1 }}" target="_blank" class="text-decoration-none text-secondary">Link</a>
        @endif

        @if($hq->link2)
          <hr class="my-3 w-50">
          <p class="mb-1">Reboot</p>
          <a href="{{ $hq->link2 }}" target="_blank" class="text-decoration-none text-secondary">Link</a>
        @endif

        @if($hq->link3)
          <hr class="my-3 w-50">
          <p class="mb-1">Link Adicional</p>
          <a href="{{ $hq->link3 }}" target="_blank" class="text-decoration-none text-secondary">Link</a>
        @endif
      </div>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
