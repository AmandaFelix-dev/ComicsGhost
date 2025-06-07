@extends('layouts.app')
@section('css')
    <link href="{{ asset('css/comic.css') }}" rel="stylesheet">
@endsection
@section('content')
    <!-- Conteúdo principal -->
    <div class="container my-5">
        <div class="row g-5">

            <!-- Capa da HQ -->
            <div class="col-md-4 text-center">
                <img src="{{ asset('/assets/image/home/hqs/' . $hq->imagens) }}" alt="{{ $hq->titulo }}"
                    class="img-fluid rounded shadow" style="width: 100%; max-width: 300px; height: auto;">
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
                    @foreach (explode(',', $hq->generos) as $genero)
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

                @php
                    $user = Auth::user();
                    $ja_favoritado = $user->favoritos()->where('h_q_id', $hq->id)->exists();
                @endphp

                @if ($ja_favoritado)
                    <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-custom-class="custom-tooltip">
                        Favorito <i class="bi bi-bookmark-fill"></i>
                    </button>
                @else
                    <!-- Botão Favoritar -->
                    <form action="{{ route('favoritar', $hq->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip">
                            Favoritar <i class="bi bi-bookmark ms-1"></i>
                        </button>
                    </form>
                @endif

                <!-- Onde Comprar -->
                <div class="row mt-5">
                    <div class="col">
                        <h5 class="mb-3">
                            <span class="fs-4">📌</span> Onde Comprar
                        </h5>
                        <p class="mb-1">{{ $hq->loja1 }}</p>
                        <a href="{{ $hq->link1 }}" class="text-decoration-none">Link</a>
                        <p class="mb-1">{{ $hq->loja2 }}</p>
                        <a href="{{ $hq->link2 }}" class="text-decoration-none">Link</a>
                        @if ($hq->loja3 != null)
                            <p class="mb-1">{{ $hq->loja3 }}</p>
                            <a href="{{ $hq->link3 }}" class="text-decoration-none">Link</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(
                tooltipTriggerEl));
        });
    </script>
@endsection
@endsection
