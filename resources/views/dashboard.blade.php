@extends('layouts.app')

@section('content')
<div class="dashboard-container">
    <div class="dashboard-header">
        <h1>Selamat Datang, {{ Auth::user()->name }}!</h1>
        <p>Selamat datang di area member BelajarSini.com</p>
    </div>
    
    <div class="dashboard-stats">
        <div class="stat-card">
            <div class="stat-icon">📚</div>
            <div class="stat-info">
                <h3>Materi Tersedia</h3>
                <p class="stat-value">125</p>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon">👨‍🎓</div>
            <div class="stat-info">
                <h3>Status Paket</h3>
                <p class="stat-value">{{ ucfirst(Auth::user()->package) }}</p>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon">🏆</div>
            <div class="stat-info">
                <h3>Progress Belajar</h3>
                <p class="stat-value">0%</p>
            </div>
        </div>
    </div>
    
    <div class="dashboard-content">
        <div class="content-section">
            <h2>Materi Terbaru</h2>
            <div class="materials-grid">
                <div class="material-card">
                    <div class="material-thumbnail">📝</div>
                    <div class="material-info">
                        <h3>Pengenalan Laravel 12</h3>
                        <p>Mempelajari dasar-dasar framework Laravel 12</p>
                    </div>
                </div>
                
                <div class="material-card">
                    <div class="material-thumbnail">💻</div>
                    <div class="material-info">
                        <h3>Web Design Modern</h3>
                        <p>Prinsip desain website yang modern dan responsif</p>
                    </div>
                </div>
                
                <div class="material-card">
                    <div class="material-thumbnail">🛠️</div>
                    <div class="material-info">
                        <h3>Backend Development</h3>
                        <p>Membangun API dan struktur database yang efisien</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form method="POST" action="{{ route('logout') }}" class="logout-form">
    @csrf
    <button type="submit" class="btn btn-logout">Logout</button>
</form>
@endsection