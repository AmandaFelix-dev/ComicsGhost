<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ asset('css/register.css') }}" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jersey+10&family=Wix+Madefor+Display:wght@400..800&display=swap" rel="stylesheet">
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

<!-- Conteúdo principal -->
<main class="layout-wrapper">
  <div class="form-box">

    <!-- Formulário -->
    <div class="form-section">
      <h2 class="fw-bold mb-3 wix-madefor-display-hero-title">Cadastro de usuário</h2>
      <p class="text-muted mb-4 pb-4">Preencha seus dados para criar uma conta</p>

      <form action="/cadastro" method="POST">
        @csrf
        <div class="mb-4">
          <label for="username" class="fw-bold mb-2 wix-madefor-display-hero-title">Nome de usuário</label>
          <input type="text" required class="form-control" id="username" name="username" placeholder="Digite seu nome de usuário">
        </div>
        <div class="mb-4">
          <label for="email" class="fw-bold mb-2 wix-madefor-display-hero-title">Email</label>
          <input type="email" required class="form-control" id="email" name="email" placeholder="Digite seu endereço de e-mail">
        </div>
        <div class="mb-4">
          <label for="senha" class="fw-bold mb-2 wix-madefor-display-hero-title">Senha</label>
          <input type="password" required class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
          <small class="text-muted">A senha deve ter pelo menos 8 caracteres</small>
        </div>
        <div class="d-flex gap-3 mt-4">
          <button type="reset" class="btn btn-outline-dark w-50">Cancelar</button>
          <button type="submit" class="btn btn-dark w-50 fw-semibold">Inscrever-se</button>
        </div>
      </form>
    </div>

    <!-- Imagem lateral -->
    <div class="bg-img"></div>
  </div>
</main>

  <!-- Rodapé -->
  <footer class="text-center py-4">
    <p class="mb-0">© Time unides7 2025</p>
    <a href="#" class="text-dark"><i class="bi bi-github"></i></a>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/register.js') }}"></script>
</body>
</html>
