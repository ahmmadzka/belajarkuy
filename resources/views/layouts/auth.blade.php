<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'BelajarSini.com') }}</title>
    
    <!-- CSS Eksternal -->
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="app">
        @yield('content')
    </div>
    
    <!-- JavaScript Eksternal -->
    <script src="{{ asset('js/auth.js') }}"></script>
</body>
</html>