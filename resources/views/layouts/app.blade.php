<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'BelajarSini.com') }}</title>
    
    <!-- CSS Eksternal -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="app-container">
        <header class="app-header">
            <div class="header-logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/belajarsini-logo.png') }}" alt="BelajarSini.com Logo" class="logo">
                </a>
            </div>
            
            <div class="header-nav">
                <nav class="main-nav">
                    <a href="{{ route('dashboard') }}" class="nav-link active">Dashboard</a>
                    <a href="#" class="nav-link">Materi</a>
                    <a href="#" class="nav-link">Profil</a>
                </nav>
                
                <div class="user-menu">
                    <span class="user-name">{{ Auth::user()->name }}</span>
                </div>
            </div>
        </header>
        
        <main class="app-content">
            @yield('content')
        </main>
        
        <footer class="app-footer">
            <p>&copy; {{ date('Y') }} BelajarSini.com - Platform Belajar Online</p>
        </footer>
    </div>
    
    <!-- JavaScript Eksternal -->
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>