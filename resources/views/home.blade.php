<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro - ComicsGhost</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ asset('css/home.css') }}" rel="stylesheet" />
</head>
<body>

  <!-- Navbar -->
  <header class="navbar-custom">
    <div class="d-flex align-items-center gap-2">
      <img src="{{ asset('assets/image/iconecomicsghost.jpg') }}" alt="Ícone ComicsGhost" class="logo-ghost">
      <span class="fs-4 fw-semibold ms-2">ComicsGhost</span>
    </div>
    <nav class="d-none d-md-flex gap-4 text-secondary">
      <a href="#" class="text-decoration-none text-dark">Gêneros</a>
      <a href="#" class="text-decoration-none text-dark">Itens em Destaque</a>
      <a href="#" class="text-decoration-none text-dark">Todos os Itens</a>
    </nav>
    <button class="btn btn-outline-secondary rounded-pill px-4">Entrar →</button>
  </header>

  <!-- Conteúdo principal -->
  <div class="layout-wrapper">
    <div class="form-box">
      
      <!-- Formulário -->
      <div class="form-section">
        <img src="{{ asset('assets/image/logo.png') }}" alt="Logo ComicsGhost" class="logo">
        <h2 class="fw-bold mb-3">Cadastro de usuário</h2>
        <p class="text-muted mb-4">Preencha seus dados para criar uma conta</p>

        <form action="/cadastro" method="POST">
          @csrf
          <div class="mb-3">
            <label for="username" class="form-label">Nome de usuário</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Digite seu nome de usuário">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu endereço de e-mail">
          </div>
          <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
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

    <!-- Rodapé -->
   <!-- Rodapé -->
<footer class="text-center mt-3">
  <div class="footer-content d-flex justify-content-center align-items-center">
    <span>© Time unides7 2025</span>
    <a href="https://github.com/seu-usuario" target="_blank">
      <img src="{{ asset('assets/image/github-icon.png') }}" alt="GitHub" class="ms-2" />
    </a>
  </div>
</footer>
 </div>

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
