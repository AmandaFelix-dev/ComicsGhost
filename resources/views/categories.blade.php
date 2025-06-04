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

<div class="container my-5">
  {{-- Seção Superior (Banner e Descrição) - NÃO É CARROSSEL --}}
  <div class="row align-items-center">
    <div class="col-md-6">
      <h1 class="display-4 fw-bold">Descubra histórias que combinam com seu estilo!</h1>
      <p class="lead">
        Aqui você encontra HQs organizadas por gêneros, desde super-heróis até aventuras intensas. Escolha seu favorito e mergulhe em um universo de emoções!
      </p>
      <div class="dropdown mt-3">
        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownGeneros" data-bs-toggle="dropdown" aria-expanded="false">
          Listar gêneros
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownGeneros">
          <li><a class="dropdown-item" href="#acao">Ação</a></li>
          <li><a class="dropdown-item" href="#drama">Drama</a></li>
          <li><a class="dropdown-item" href="#suspense">Suspense</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-6 text-center">
      {{-- Imagem do Banner --}}
      <img src="{{ asset('assets/image/jovenstitasbanner.png') }}" alt="Banner Jovens Titãs" class="img-fluid rounded shadow-sm" style="max-height: 600px;">
    </div>
  </div>

  {{-- Seção Ação --}}
  <section id="acao" class="genero-section text-center my-5">
    <div class="container">
      <h2 class="fw-bold">Ação</h2>
      <p class="text-muted">Para quem quer explosão, lutas épicas e heróis sob pressão!</p>

      <div id="carouselAcao" class="carousel slide" data-bs-ride="carousel">
        {{-- CONTEÚDO DINÂMICO APENAS AQUI DENTRO --}}
        <div class="carousel-inner">
          @if(isset($acao) && count($acao) > 0)
            @foreach($acao as $index => $hq)
              <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <div class="card d-flex flex-row align-items-center p-3 mx-auto" style="max-width: 700px;">
                  <img src="{{ asset('assets/image/home/hqs/'. $hq->imagens) }}" alt="{{ $hq->titulo }}" class="img-fluid me-3 rounded" style="width: 120px; height: 160px; object-fit: cover;">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $hq->titulo }}</h5>
                    <p class="card-text">{{ Str::limit($hq->descricao, 60) }}</p>
                    <span class="badge bg-primary me-2">Ação</span> {{-- Badge estático pois esta é a seção de Ação --}}
                    <a href="{{ route('hqs.show', $hq->id) }}" class="btn btn-danger">Veja mais</a>
                  </div>
                </div>
              </div>
            @endforeach
          @else
            <div class="carousel-item active">
              <div class="card d-flex flex-row align-items-center p-3 mx-auto" style="max-width: 700px;">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Nenhuma HQ encontrada</h5>
                  <p class="card-text">Não há HQs de Ação cadastradas.</p>
                </div>
              </div>
            </div>
          @endif
        </div>
        {{-- FIM DO CONTEÚDO DINÂMICO --}}

        {{-- Botões de navegação do carrossel Ação --}}
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselAcao" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselAcao" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Próximo</span>
        </button>
      </div>
    </div>
  </section>

  {{-- Seção Drama --}}
  <section id="drama" class="genero-section text-center my-5">
    <div class="container">
      <h2 class="fw-bold">Drama</h2>
      <p class="text-muted">Quando a emoção fala mais alto nas páginas...</p>

      <div id="carouselDrama" class="carousel slide" data-bs-ride="carousel">
        {{-- CONTEÚDO DINÂMICO APENAS AQUI DENTRO --}}
        <div class="carousel-inner">
          @if(isset($drama) && count($drama) > 0)
            @foreach($drama as $index => $hq)
              <div class="carousel-item {{ $index == 0 ? 'active' : ''}}">
                <div class="card d-flex flex-row align-items-center p-3 mx-auto" style="max-width: 700px;">
                  <img src="{{ asset('assets/image/home/hqs/' . $hq->imagens) }}" alt="{{ $hq->titulo }}" class="img-fluid me-3 rounded-3 shadow-sm" style="width: 120px; height: 160px; object-fit: cover;">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $hq->titulo }}</h5>
                    <p class="card-text">{{ Str::limit($hq->descricao, 60)}}</p>
                    <span class="badge bg-warning text-dark">Drama</span> {{-- Badge estático pois esta é a seção de Drama --}}
                    <a href="{{ route('hqs.show', $hq->id) }}" class="btn btn-danger">Veja mais</a>
                  </div>
                </div>
              </div>
            @endforeach
          @else
            <div class="carousel-item active">
              <div class="card d-flex flex-row align-items-center p-3 mx-auto" style="max-width: 700px;">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Nenhuma HQ encontrada</h5>
                  <p class="card-text">Não há HQs de Drama cadastradas.</p>
                </div>
              </div>
            </div>
          @endif
        </div>
        {{-- FIM DO CONTEÚDO DINÂMICO --}}

        {{-- Botões de navegação do carrossel Drama --}}
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

  {{-- Seção Suspense --}}
  <section id="suspense" class="genero-section text-center my-5">
    <div class="container">
      <h2 class="fw-bold">Suspense</h2>
      <p class="text-muted">Onde cada virada de página é um novo mistério...</p>

      <div id="carouselSuspense" class="carousel slide" data-bs-ride="carousel">
        {{-- CONTEÚDO DINÂMICO APENAS AQUI DENTRO --}}
        <div class="carousel-inner">
          @if(isset($suspense) && count($suspense) > 0)
            @foreach($suspense as $index => $hq)
              <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <div class="card d-flex flex-row align-items-center p-3 mx-auto" style="max-width: 700px;">
                  <img src="{{ asset('assets/image/home/hqs/' . $hq->imagens) }}" alt="{{ $hq->titulo }}" class="img-fluid me-3 rounded-3 shadow-sm" style="width: 120px; height: 160px; object-fit: cover;">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $hq->titulo }}</h5>
                    <p class="card-text">{{ Str::limit($hq->descricao, 60) }}</p>
                    <span class="badge bg-secondary">Suspense</span> {{-- Badge estático pois esta é a seção de Suspense --}}
                    <a href="{{ route('hqs.show', $hq->id) }}" class="btn btn-danger">Veja mais</a>
                  </div>
                </div>
              </div>
            @endforeach
          @else
            <div class="carousel-item active">
              <div class="card d-flex flex-row align-items-center p-3 mx-auto" style="max-width: 700px;">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Nenhuma HQ encontrada</h5>
                  <p class="card-text">Não há HQs de Suspense cadastradas.</p>
                </div>
              </div>
            </div>
          @endif
        </div>
        {{-- FIM DO CONTEÚDO DINÂMICO --}}

        {{-- Botões de navegação do carrossel Suspense --}}
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

</div> {{-- Fim do container principal --}}

  <!-- Rodapé -->
  <footer class="text-center py-4">
    <p class="mb-0">© Time unides7 2025</p>
    <a href="#" class="text-dark"><i class="bi bi-github"></i></a>
  </footer>

<!-- Scripts Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
