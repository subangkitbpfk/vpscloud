<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Kementerian Kesehatan')</title>

    @livewireStyles

    {{-- Fonts & Bootstrap --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        .top-header {
            background-color: #0B6E4F;
            color: white;
            padding: 10px 0;
        }

        .top-header .logo {
            max-height: 60px;
        }

        .main-navbar {
            background-color: #ffffff;
            border-bottom: 2px solid #0B6E4F;
        }

        .main-navbar .nav-link {
            color: #0B6E4F !important;
            font-weight: 500;
            margin-right: 15px;
        }

        .main-navbar .nav-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    {{-- Header Atas --}}
    <div class="top-header">
        <div class="container d-flex align-items-center">
            <img src="{{ asset('img/logo-kemenkes.png') }}" alt="Logo Kemenkes" class="logo me-3">
            <h5 class="mb-0">Kementerian Kesehatan Republik Indonesia</h5>
        </div>
    </div>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg main-navbar">
        <div class="container">
            <a class="navbar-brand fw-bold text-success" href="{{ url('/') }}">KEMKES</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Isi Konten --}}
    <main class="py-4">
        <div class="container">
            {{ $slot ?? '' }}
        </div>
    </main>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
