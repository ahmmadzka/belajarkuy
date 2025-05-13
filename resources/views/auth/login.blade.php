@extends('layouts.auth')

@section('content')
<div class="auth-container">
    <div class="left-panel">
        <div class="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="BelajarSini.com Logo" class="logo">
        </div>
        <div class="welcome-text">
            <h1>Hai, Selamat Datang Kembali!</h1>
            <p>Masukkan data login Anda untuk melanjutkan ke halaman member area.</p>
        </div>
    </div>
    
    <div class="right-panel">
        <div class="auth-form">
            <h2>Login</h2>
            <p class="subtitle">Masuk ke akun kamu di BelajarSini.com</p>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email kamu" value="{{ old('email') }}" required autofocus>
                </div>
                
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password kamu" required>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="icon-login"></i> LOGIN
                    </button>
                </div>
                
                <div class="form-group">
                    <button type="button" class="btn btn-whatsapp btn-block">
                        <i class="icon-whatsapp"></i> Login dengan WhatsApp
                    </button>
                </div>
                
                <div class="form-footer">
                    <p>Belum punya akun? <a href="{{ route('register') }}">Register</a></p>
                    <p>Lupa password? <a href="#">Ganti Password</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection