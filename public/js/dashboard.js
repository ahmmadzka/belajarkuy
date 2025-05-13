/**
 * BelajarSini.com - Dashboard JavaScript
 * Digunakan untuk dashboard dan member area
 */

document.addEventListener('DOMContentLoaded', function() {
    // Fungsi untuk active link di navbar
    function setActiveNavLink() {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-link');
        
        navLinks.forEach(link => {
            const linkPath = new URL(link.href).pathname;
            if (currentPath === linkPath) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }
    
    // Smooth scrolling
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }
    
    // Animasi untuk card materi
    function initMaterialCards() {
        const materialCards = document.querySelectorAll('.material-card');
        
        if (materialCards.length > 0) {
            materialCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.classList.add('card-hover');
                });
                
                card.addEventListener('mouseleave', function() {
                    this.classList.remove('card-hover');
                });
                
                // Tambahkan event click untuk navigasi ke detail materi
                card.addEventListener('click', function() {
                    // Implementasi navigasi akan ditambahkan nanti
                    console.log('Material card clicked');
                });
            });
        }
    }
    
    // Konfirmasi sebelum logout
    function initLogoutConfirmation() {
        const logoutForm = document.querySelector('.logout-form');
        
        if (logoutForm) {
            logoutForm.addEventListener('submit', function(e) {
                const confirmLogout = confirm('Apakah Anda yakin ingin keluar?');
                if (!confirmLogout) {
                    e.preventDefault();
                }
            });
        }
    }
    
    // Inisialisasi
    setActiveNavLink();
    initSmoothScroll();
    initMaterialCards();
    initLogoutConfirmation();
});