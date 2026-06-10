<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog Kami')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Typo tanda '<' sudah diperbaiki */
        body { background-color: #f4f4f9; } 
        
        .navbar-custom { 
            background: linear-gradient(to right, #2C3E50, #4CA1AF);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .navbar-custom .navbar-brand, .navbar-custom .nav-link { color: #ffffff; font-weight: 500; }
        .navbar-custom .nav-link:hover { color: #e8f5e9; opacity: 0.8; }
        
        .card-custom { 
            border: none; 
            border-radius: 8px; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.05); 
        }
        
        .badge-category { background-color: #e8f5e9; color: #198754; font-weight: 600; padding: 6px 12px; border-radius: 50px; }
        
        /* --- Tombol Liquid Glass + Firefly Glow --- */
        .btn-readmore { 
            position: relative;
            overflow: hidden; 
            background: rgba(25, 135, 84, 0.15); 
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            color: #146c43; 
            border: 1px solid rgba(25, 135, 84, 0.3);
            border-radius: 20px; 
            padding: 8px 20px; 
            font-size: 14px; 
            font-weight: 600;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            text-decoration: none;
            z-index: 1; 
        }

        .btn-readmore::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: radial-gradient(
                circle at var(--x, 50%) var(--y, 50%),
                rgba(57, 255, 20, 0.9) 0%,
                rgba(57, 255, 20, 0.4) 35%,
                transparent 70%
            );
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
            mix-blend-mode: color-dodge;
        }

        .btn-readmore:hover::before { opacity: 1; }
        
        .btn-readmore:hover { 
            color: #146c43; 
            border-color: rgba(57, 255, 20, 0.9); 
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(255, 235, 59, 0.2); 
        }

        .footer-custom {
            background: linear-gradient(to right, #2C3E50, #4CA1AF);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-custom py-3 mb-4">
        <div class="container d-flex justify-content-between align-items-center">
            
            <a class="navbar-brand d-flex flex-column m-0 p-0 text-decoration-none" href="{{ route('home') }}">
                <span class="fw-bold text-white" style="font-size: 1.5rem; line-height: 1;">Blog Zaky</span>
                <span style="color: rgba(255, 255, 255, 0.7); font-size: 0.85rem; margin-top: 4px; font-weight: normal;">Artikel terbaru seputar teknologi dan pemrograman</span>
            </a>

            <div class="d-flex align-items-center gap-4">
                <a class="text-white text-decoration-none" href="{{ route('home') }}">Beranda</a>
                <a class="text-white text-decoration-none" href="{{ route('home') }}">Artikel</a>
                <a class="text-white text-decoration-none" href="#">Kategori</a>
                <a class="text-white text-decoration-none" href="{{ route('tentang') }}">Tentang</a>                    
                
                <a class="text-white text-decoration-none border border-light rounded px-3 py-1 ms-1" style="font-size: 0.85rem; background: rgba(255,255,255,0.1);" href="{{ route('login') }}">Login</a>
            </div>
            
        </div>
    </nav>

    <div class="container flex-grow-1">
        <main>
            @yield('content')
        </main>
    </div>

    <footer class="footer-custom text-center text-light py-4 mt-5">
        <p class="mb-0 small">&copy; 2026 Blog ZarD. Seluruh hak cipta dilindungi.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.btn-readmore');
            buttons.forEach(btn => {
                btn.addEventListener('mousemove', e => {
                    const rect = btn.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    btn.style.setProperty('--x', `${x}px`);
                    btn.style.setProperty('--y', `${y}px`);
                });
            });
        });
    </script>
</body>
</html>