<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ComicsGhost</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ asset('css/categories.css') }}" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400..800&display=swap" rel="stylesheet">  
</head>

<body style="font-family: 'Wix Madefor Display', sans-serif;"></body>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Categorias | ComicsGhost</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/categories.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400;700&display=swap" rel="stylesheet">
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
<section class="text-center my-5">
  <div class="container">
    <h1 class="fw-bold">Descubra histórias que combinam com seu estilo!</h1>
    <p class="text-muted">Aqui você encontra HQs organizadas por gêneros, desde super-heróis até aventuras intensas. Escolha seu favorito e mergulhe em um universo de emoções!</p>
    <a href="#" class="btn btn-dark mt-3">Listar gêneros →</a>
    <img src="{{ asset('assets/image/banner.jpg') }}" alt="Banner HQ" class="img-fluid mt-4 rounded-4 shadow-sm">
  </div>
</section>

<!-- Categoria -->
<section class="container mb-5">
  <!-- Ação -->
  <h2 class="fw-bold">Ação</h2>
  <p>Para quem quer explosão, lutas épicas e heróis sob pressão!</p>
  <div id="carouselAcao" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner d-flex gap-3 overflow-auto flex-nowrap">
      <div class="card hq-card active">
        <img src="{{ asset('assets/image/invincible.jpg') }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Invincible #144</h5>
          <p class="card-text text-muted">The end of all things</p>
          <a href="#" class="btn btn-danger btn-sm">Veja mais</a>
        </div>
      </div>
      <div class="card hq-card">
        <img src="{{ asset('assets/image/spiderman.jpg') }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Spider-Man: Miles Morales #1</h5>
          <a href="#" class="btn btn-danger btn-sm">Veja mais</a>
        </div>
      </div>
      <!-- Adicione mais cards conforme necessário -->
    </div>
  </div>

  <!-- Suspense -->
  <h2 class="fw-bold mt-5">Suspense</h2>
  <p>Onde cada virada de página é um novo mistério...</p>
  <div class="carousel slide">
    <div class="carousel-inner


