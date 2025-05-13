// Tambahan CSS untuk animasi
document.addEventListener('DOMContentLoaded', function() {
    function initFormAnimations() {
        const formControls = document.querySelectorAll('.form-control');
        if (formControls.length > 0) {
            formControls.forEach(input => {
                // Tambahkan efek focus
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('input-focused');
                });
                
                // Hapus efek focus
                input.addEventListener('blur', function() {
                    if (this.value === '') {
                        this.parentElement.classList.remove('input-focused');
                    }
                });
                
                // Cek jika input sudah memiliki nilai (misalnya, pada form error)
                if (input.value !== '') {
                    input.parentElement.classList.add('input-focused');
                }
            });
        }
    }
    
    // Validasi form sebelum submit
    function initFormValidation() {
        const authForm = document.querySelector('form');
        if (authForm) {
            authForm.addEventListener('submit', function(e) {
                let isValid = true;
                
                // Validasi email
                const emailInput = document.getElementById('email');
                if (emailInput && !isValidEmail(emailInput.value)) {
                    showError(emailInput, 'Email tidak valid');
                    isValid = false;
                }
                
                // Validasi password pada register form
                const passwordInput = document.getElementById('password');
                const confirmPasswordInput = document.getElementById('password_confirmation');
                
                if (passwordInput && confirmPasswordInput) {
                    // Validasi kekuatan password
                    if (passwordInput.value.length < 8) {
                        showError(passwordInput, 'Password minimal 8 karakter');
                        isValid = false;
                    }
                    
                    // Validasi konfirmasi password
                    if (passwordInput.value !== confirmPasswordInput.value) {
                        showError(confirmPasswordInput, 'Password tidak sama');
                        isValid = false;
                    }
                }
                
                if (!isValid) {
                    e.preventDefault();
                }
            });
        }
    }
    
    // Fungsi validasi email
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    // Fungsi untuk menampilkan error
    function showError(input, message) {
        const formGroup = input.closest('.form-group');
        let errorDiv = formGroup.querySelector('.error-message');
        
        if (!errorDiv) {
            errorDiv = document.createElement('div');
            errorDiv.className = 'error-message';
            formGroup.appendChild(errorDiv);
        }
        
        errorDiv.textContent = message;
        input.classList.add('is-invalid');
    }
    
    // Inisialisasi
    initFormAnimations();
    initFormValidation();
    
    // Tambahkan WhatsApp login (hanya UI, tidak fungsional)
    const whatsappButton = document.querySelector('.btn-whatsapp');
    if (whatsappButton) {
        whatsappButton.addEventListener('click', function() {
            alert('Fitur WhatsApp login akan segera tersedia!');
        });
    }
    
    // Handle animasi transisi halaman
    document.body.classList.add('page-loaded');
    
    // Tambahkan class untuk animasi ketika halaman dimuat
    setTimeout(function() {
        document.body.classList.add('page-loaded');
    }, 100);
    
    // Animasi hover pada tombol
    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.classList.add('btn-hover');
        });
        
        button.addEventListener('mouseleave', function() {
            this.classList.remove('btn-hover');
        });
    });
    
    // Handle package selection
    const packageRadios = document.querySelectorAll('input[name="package"]');
    if (packageRadios.length > 0) {
        packageRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                // Reset semua package options
                document.querySelectorAll('.package-option label').forEach(label => {
                    label.classList.remove('selected');
                });
                
                // Highlight yang dipilih
                if (this.checked) {
                    this.parentElement.querySelector('label').classList.add('selected');
                }
            });
        });
        
        // Cek apakah sudah ada yang dipilih (misalnya setelah error form)
        const checkedPackage = document.querySelector('input[name="package"]:checked');
        if (checkedPackage) {
            checkedPackage.parentElement.querySelector('label').classList.add('selected');
        }
    }
    
    // Tambahkan icon animasi pada form input
    const inputs = document.querySelectorAll('.form-control');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.classList.add('input-active');
        });
        
        input.addEventListener('blur', function() {
            this.classList.remove('input-active');
        });
    });
});