<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1050, initial-scale=1.0">
    <title>Cadastro - ComicsGhost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <style>
        /* Garantir que o layout tenha 1050x565 */
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .layout-wrapper {
            width: 1050px;
            height: 565px;
            margin: 122px auto 0 auto;
            position: relative;
        }

        header.navbar-custom {
            width: 1439px;
            height: 78px;
            background-color: white;
            border-bottom: 1px solid #dee2e6;
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 100px;
        }

        .navbar-custom img {
            height: 40px;
        }

        .form-box {
            width: 1050px;
            height: 565px;
            display: flex;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            overflow: hidden;
        }

        .form-section {
            flex: 1;
            background-color: white;
            padding: 50px;
        }

        .logo {
            width: 285px;
            height: 61px;
            margin-left: 25px;
            margin-bottom: 20px;
        }

        .bg-img {
            width: 520px;
            height: 524px;
            background-image: url('/assets/image/JovensTitasCADASTRO.png');
            background-size: cover;
            background-position: center;
        }

        footer {
            text-align: center;
            margin-top: 30px;
        }

        footer img {
            width: 20px;
            margin-top: 8px;
            transition: transform 0.3s ease;
        }

        footer img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>

    <!-- Navbar fixa de 1439x78 -->
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
        <footer class="mt-3">
            <small>© Time unides7 2025</small> <br>
            <a href="https://github.com" target="_blank">
                <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="GitHub">
            </a>
            
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/home.js') }}"></script>
    
</body>
</html>
