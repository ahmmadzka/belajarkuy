@extends('layouts.auth')

@section('content')
<div class="auth-container">
    <div class="left-panel">
        <div class="logo-container">
            <img src="{{ asset('images/belajarsini-logo.png') }}" alt="BelajarSini.com Logo" class="logo">
        </div>
        <div class="welcome-text">
            <h1>Bergabunglah dengan BelajarSini.com!</h1>
            <p>Daftar sekarang dan mulai perjalanan belajarmu dengan ribuan materi eksklusif.</p>
        </div>
    </div>
    
    <div class="right-panel">
        <div class="auth-form">
            <h2>Register</h2>
            <p class="subtitle">Buat akun baru di BelajarSini.com</p>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nama lengkap" value="{{ old('name') }}" required autofocus>
                </div>
                
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                </div>
                
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                </div>
                
                <div class="form-group">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Konfirmasi password" required>
                </div>
                
                <div class="form-group">
                    <label class="package-label">Pilih Paket:</label>
                    <div class="package-options">
                        <div class="package-option">
                            <input type="radio" name="package" id="free" value="free" {{ old('package') == 'free' ? 'checked' : '' }} required>
                            <label for="free">
                                <span class="package-name">Free</span>
                                <span class="package-desc">Akses terbatas</span>
                            </label>
                        </div>
                        
                        <div class="package-option">
                            <input type="radio" name="package" id="premium" value="premium" {{ old('package') == 'premium' ? 'checked' : '' }}>
                            <label for="premium">
                                <span class="package-name">Premium</span>
                                <span class="package-desc">Akses penuh</span>
                            </label>
                        </div>
                        
                        <div class="package-option">
                            <input type="radio" name="package" id="professional" value="professional" {{ old('package') == 'professional' ? 'checked' : '' }}>
                            <label for="professional">
                                <span class="package-name">Professional</span>
                                <span class="package-desc">Akses VIP</span>
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">DAFTAR</button>
                </div>
                
                <div class="form-footer">
                    <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection