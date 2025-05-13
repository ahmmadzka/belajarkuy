<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BelajarKuy - Platform Belajar Mudah dan Menyenangkan</title>
    <meta name="description" content="Platform belajar online yang mudah dan menyenangkan untuk semua kalangan.">
    
    <!-- External CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body class="font-poppins">
    <!-- Header/Navigation -->
    <header class="header" id="header">
        <div class="container">
            <nav class="nav">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="BelajarKuy Logo">
                </a>
                
                <div class="nav-menu" id="nav-menu">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="#tentang" class="nav-link">Tentang Kami</a></li>
                        <li class="nav-item"><a href="#fitur" class="nav-link">Fitur</a></li>
                        <li class="nav-item"><a href="#testimoni" class="nav-link">Testimoni</a></li>
                    </ul>
                </div>
                
                <div class="nav-actions">
                    <a href="{{ route('login') }}" class="btn btn-link">Masuk</a>
                    <a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
                </div>
                
                <div class="hamburger" id="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Belajar Jadi Lebih Mudah dan Menyenangkan</h1>
                    <p class="hero-description">
                        Nggak harus jago coding untuk bikin website yang profesional.
                        BelajarKuy.com hadir untuk bimbing kamu wujudkan website dengan pembelajaran interaktif dan mudah dipahami.
                    </p>
                    <div class="hero-cta">
                        <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Mulai Belajar Sekarang</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="{{ asset('images/gambar.png') }}" alt="Ilustrasi Belajar Online">
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section class="about" id="tentang">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Tentang Kami</h2>
                <p class="section-subtitle">Cerita singkat tentang platform belajar kami</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <p>
                        BelajarKuy.com adalah platform pembelajaran online yang dirancang untuk membuat belajar menjadi
                        lebih mudah dan menyenangkan. Kami percaya bahwa pendidikan berkualitas harus bisa diakses oleh
                        semua orang, di mana saja, dan kapan saja.
                    </p>
                    <p>
                        Dengan materi berkualitas dan metode pembelajaran interaktif, kami hadir untuk membantu kamu
                        meningkatkan keterampilan dan pengetahuan tanpa batasan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Fitur Section -->
    <section class="features" id="fitur">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Fitur Unggulan</h2>
                <p class="section-subtitle">Alasan mengapa kamu harus bergabung dengan kami</p>
            </div>
            <div class="features-cards">
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="{{ asset('images/interaktif.png') }}" alt="Ikon Interaktif">
                    </div>
                    <h3 class="feature-title">Interaktif</h3>
                    <p class="feature-description">
                        Materi pembelajaran yang interaktif membuat proses belajar lebih menarik dan mudah dipahami.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="{{ asset('images/berkualitas.png') }}" alt="Ikon Kualitas">
                    </div>
                    <h3 class="feature-title">Materi Berkualitas</h3>
                    <p class="feature-description">
                        Konten pembelajaran yang dibuat oleh pakar dengan pengalaman praktis di bidangnya.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="{{ asset('images/chatbot.png') }}" alt="Ikon Chatbot">
                    </div>
                    <h3 class="feature-title">Chatbot</h3>
                    <p class="feature-description">
                        Layanan chatbot kami siap membantu kamu 24/7 dalam proses belajar dan navigasi platform.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonials" id="testimoni">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Apa Kata Mereka</h2>
                <p class="section-subtitle">Pengalaman positif dari pengguna kami</p>
            </div>
            <div class="testimonial-slider" id="testimonial-slider">
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <p class="testimonial-text">
                            "Berkat BelajarKuy, saya bisa membuat website profesional tanpa perlu belajar coding dari nol. 
                            Materinya mudah dipahami dan sangat praktis!"
                        </p>
                        <div class="testimonial-author">
                            <h4 class="author-name">Budi Arie</h4>
                            <p class="author-info">EX Menteri Kominfo</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <p class="testimonial-text">
                            "Platform belajar yang sangat membantu. Saya suka dengan cara penyampaian materinya yang 
                            terstruktur dan mudah diikuti."
                        </p>
                        <div class="testimonial-author">
                            <h4 class="author-name">Ahmad Adzka Najhan</h4>
                            <p class="author-info">Mahasiswa</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <p class="testimonial-text">
                            "Setelah mengikuti tutorial di BelajarKuy, website saya berhasil muncul di halaman pertama Google. 
                            Tips SEO-nya sangat bermanfaat!"
                        </p>
                        <div class="testimonial-author">
                            <h4 class="author-name">Sandhika Galih</h4>
                            <p class="author-info">Profesional</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-controls">
                <button class="control-prev" id="prev-testimonial">&lt;</button>
                <button class="control-next" id="next-testimonial">&gt;</button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Buka potensi belajarmu hari ini!</h2>
                <p class="cta-description">Bergabunglah dengan ribuan pengguna yang telah merasakan manfaat belajar di platform kami.</p>
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Daftar Sekarang</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="BelajarKuy Logo">
                    <p class="footer-tagline">Platform Belajar Online Terpercaya</p>
                </div>
                <div class="footer-links">
                    <div class="footer-link-group">
                        <h4 class="footer-link-title">Navigasi</h4>
                        <ul class="footer-link-list">
                            <li><a href="#hero">Beranda</a></li>
                            <li><a href="#tentang">Tentang Kami</a></li>
                            <li><a href="#fitur">Fitur</a></li>
                            <li><a href="#testimoni">Testimoni</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-group">
                        <h4 class="footer-link-title">Akun</h4>
                        <ul class="footer-link-list">
                            <li><a href="{{ route('login') }}">Masuk</a></li>
                            <li><a href="{{ route('register') }}">Daftar</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-group">
                        <h4 class="footer-link-title">Kontak</h4>
                        <ul class="footer-link-list">
                            <li><a href="mailto:info@BelajarKuy.com">coretax@BelajarKuy.com</a></li>
                            <li><a href="tel:+6281234567890">+62 812-3456-7890</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="copyright">
                    &copy; {{ date('Y') }} BelajarKuy. Hak Cipta Dilindungi.
                </p>
                <div class="social-links">
                    <a href="#" class="social-link"><img src="{{ asset('images/facebook.svg') }}" alt="Facebook"></a>
                    <a href="#" class="social-link"><img src="{{ asset('images/twitter.svg') }}" alt="Twitter"></a>
                    <a href="#" class="social-link"><img src="{{ asset('images/instagram.svg') }}" alt="Instagram"></a>
                    <a href="#" class="social-link"><img src="{{ asset('images/youtube.svg') }}" alt="YouTube"></a>
                </div>
            </div>
            <div class="trust-badges">
                <p>Dipercaya oleh perusahaan, perguruan tinggi, bahkan kementrian di Indonesia</p>
            </div>
        </div>
    </footer>

    <!-- External JavaScript -->
    <script src="{{ asset('js/landing.js') }}"></script>
</body>
</html>