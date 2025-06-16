<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Kementerian Kesehatan')</title>

    @livewireStyles

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
        }

        .top-bar {
            background-color: #007B5E;
            color: #fff;
            padding: 10px 0;
        }

        .top-bar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .main-header {
            background-color: #fff;
            border-bottom: 3px solid #007B5E;
        }

        .main-header .navbar-nav .nav-link {
            color: #007B5E;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .main-header .nav-link:hover {
            color: #005843;
        }

        .search-bar {
            position: relative;
        }

        .search-bar input {
            border-radius: 20px;
            padding-right: 40px;
        }

        .search-bar .btn {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }
    </style>
</head>

<body>
    <div class="top-bar">
        <div class="container">
            <div>
                <img src="{{ asset('img/logo-kemenkes.png') }}" alt="Logo" height="40">
                <span class="ms-2 fw-bold">Kementerian Kesehatan Republik Indonesia</span>
            </div>
            <div class="search-bar d-none d-md-block">
                <form class="d-flex">
                    <input type="text" class="form-control" placeholder="Pencarian...">
                    <button class="btn btn-light px-3" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg main-header">
        <div class="container">
            <a class="navbar-brand text-success fw-bold" href="/">Kemkes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-house-door-fill"></i> BERANDA</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-info-circle-fill"></i> PROFIL</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-patch-check-fill"></i> INFORMASI PUBLIK</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-caret-down-square-fill"></i> LAYANAN</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-play-circle-fill"></i> MEDIA</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-link-45deg"></i> TAUTAN</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-clock-fill"></i> KONTAK KAMI</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">
            {{ $slot ?? '' }}
        </div>
    </main>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
