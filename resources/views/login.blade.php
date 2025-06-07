@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
@endsection

@section('content')
<main class="layout-wrapper">
    <div class="form-box">

        <div class="form-section">
            <h2 class="fw-bold mb-3 wix-madefor-display-hero-title">Entre com seu cadastro</h2>
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="mb-4">
                    <label for="email" class="fw-bold mb-2 wix-madefor-display-hero-title">Email</label>
                    <input type="email" required class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                        placeholder="Digite seu endereço de e-mail">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="fw-bold mb-2 wix-madefor-display-hero-title">Senha</label>
                    <input type="password" required class="form-control @error('password') is-invalid @enderror" id="password" name="password"
                        placeholder="Digite sua senha">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex gap-3 mt-4">
                    <button type="reset" class="btn btn-outline-dark w-50">Cancelar</button>
                    <button type="submit" class="btn btn-dark w-50 fw-semibold">Inscrever-se</button>
                </div>
            </form>
        </div>

        <div class="bg-img"></div>
    </div>
</main>

@section('script')
    <script src="{{ asset('js/register.js') }}"></script>
@endsection
@endsection
