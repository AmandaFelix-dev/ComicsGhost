@extends('layouts.app')
@section('css')
    <link href="{{ asset('css/userprofile.css') }}" rel="stylesheet">
@endsection
@section('content')

    <!-- Header do usuário -->
    <section class="bg-dark text-white py-5">
        <div class="container d-flex align-items-center">
            <img src="{{ asset('assets/image/perfil.png') }}" alt="Avatar" class="rounded-circle me-3" width="60"
                height="60">
            <div>
                <h5 class="mb-0">{{ $cadastro->username }}</h5>
                <small>{{ $cadastro->email }}</small>
            </div>
        </div>
    </section>

    <!-- Conteúdo principal -->
    <main class="container py-5">
        <h3 class="fw-bold mb-2">Lista de Favoritos</h3>
        <p class="text-muted mb-4">Confira os HQs mais curtidos dos últimos tempos! Em breve, você também poderá adicionar
            os seus favoritos.</p>

        <!-- Card 1 -->
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gx-5 justify-content-center">
                @foreach ($favoritos as $favorito)
                    <div class="col-md-6 col-lg-6">
                        <div class="d-flex bg-light rounded shadow-sm h-100">
                            <img src="{{ asset('assets/image/home/hqs/' . $favorito->imagens) }}" alt="HQ4"
                                class="img-fluid me-3 rounded" style="width: 120px;">
                            <div class="d-flex py-3 flex-column justify-content-between">
                                <div>
                                    <h5 class="fw-bold mb-1">{{ $favorito->titulo }}</h5>
                                    @php $generos = array_map('trim', explode('/', $favorito->generos)) @endphp 
                                    @foreach ($generos as $genero)
                                    <span class="badge bg-primary me-1">{{$genero}}</span>
                                    @endforeach
                                </div>
                                <a href="/hq/{{ $favorito->id }}" class="btn btn-danger btn-sm mt-2 align-self-start">Veja mais</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    @section('script')
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                console.log("Página de perfil carregada.");
            });
            console.log('UserProfile pronto!');
        </script>
    @endsection
@endsection
