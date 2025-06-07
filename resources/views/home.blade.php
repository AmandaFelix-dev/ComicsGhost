@extends('layouts.app')
@section('page_css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection
@section('content')
    <!-- Banner de Topo -->
    <header>
        <div
            style="background: url('{{ asset('assets/image/home/banner-hq.png') }}') no-repeat center center; background-size: cover; height: 300px;">
        </div>
    </header>

    <!-- Destaques -->
    <section class="text-center py-5 container" id="destaques">
        <h2 class="fw-bold mb-3">Destaques</h2>
        <p class="text-muted mb-4">Confira as HQs que estão sendo mais comentadas nos últimos tempos!<br> Seja por revivals
            dos clássicos, entre renascimentos ou polêmicas, confira elas:</p>

        <div id="carouselExampleCaptions" class="container carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/image/home/carousel/Invincible-banner.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $homes[0]->titulo }}</h5>
                        <p>The end of all things</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/image/home/carousel/flash.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $homes[3]->titulo }}</h5>
                        <p>A ameça do gorila rei grodd</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/image/home/carousel/coringa.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $homes[2]->titulo }}</h5>
                        <p>A origem de coringa</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Todos -->
    <section class="container py-2" id="todos">

        <section class="pb-5">
            <h2 class="fw-bold mb-4 text-center">Todos</h2>
            <p class="text-muted mb-5 text-center">Confira nossas edições!</p>

            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gx-5 justify-content-center">

                    <div class="col-md-6 col-lg-6">
                        <div class="d-flex bg-light rounded shadow-sm h-100">
                            <img src="{{ asset('assets/image/home/hqs/' . $homes[0]->imagens) }}" alt="HQ1"
                                class="img-fluid me-3 rounded" style="width: 120px;">
                            <div class="d-flex py-3 flex-column justify-content-between">
                                <div>
                                    <h5 class="fw-bold mb-1">{{ $homes[0]->titulo }}</h5>
                                    <p class="text-muted mb-2">The end of all things</p>
                                    <span class="badge bg-primary me-1">Ação</span>
                                </div>
                                <a href="/hq/1" class="btn btn-danger btn-sm mt-2 align-self-start">Veja mais</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-6">
                        <div class="d-flex bg-light rounded shadow-sm h-100">
                            <img src="{{ asset('assets/image/home/hqs/' . $homes[1]->imagens) }}" alt="HQ2"
                                class="img-fluid me-3 rounded" style="width: 120px;">
                            <div class="d-flex py-3 flex-column justify-content-between">
                                <div>
                                    <h5 class="fw-bold mb-1">{{ $homes[1]->titulo }}</h5>
                                    <p class="text-muted mb-2">Miles Morales</p>
                                    <span class="badge bg-info me-1">Drama</span>
                                    <span class="badge bg-warning text-dark me-1">Fantasia</span>
                                </div>
                                <a href="/hq/2" class="btn btn-danger btn-sm mt-2 align-self-start">Veja mais</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="d-flex bg-light rounded shadow-sm h-100">
                            <img src="{{ asset('assets/image/home/hqs/' . $homes[2]->imagens) }}" alt="HQ3"
                                class="img-fluid me-3 rounded" style="width: 120px;">
                            <div class="d-flex py-3 flex-column justify-content-between">
                                <div>
                                    <h5 class="fw-bold mb-1">{{ $homes[2]->titulo }}</h5>
                                    <p class="text-muted mb-2">A origem de coringa </p>
                                    <span class="badge bg-success me-1">Ficção</span>
                                </div>
                                <a href="/hq/3" class="btn btn-danger btn-sm mt-2 align-self-start">Veja mais</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="d-flex bg-light rounded shadow-sm h-100">
                            <img src="{{ asset('assets/image/home/hqs/' . $homes[3]->imagens) }}" alt="HQ4"
                                class="img-fluid me-3 rounded" style="width: 120px;">
                            <div class="d-flex py-3 flex-column justify-content-between">
                                <div>
                                    <h5 class="fw-bold mb-1">{{ $homes[3]->titulo }}</h5>
                                    <p class="text-muted mb-2">A ameça do gorila rei grodd</p>
                                    <span class="badge bg-danger me-1">Heróis</span>
                                    <span class="badge bg-secondary me-1">Clássico</span>
                                </div>
                                <a href="/hq/4" class="btn btn-danger btn-sm mt-2 align-self-start">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Botão final -->
                <div class="mt-5 text-center">
                    <a href="/generos" class="btn btn-dark px-4">
                        Listar todos HQs
                    </a>
                </div>
        </section>
    @endsection
