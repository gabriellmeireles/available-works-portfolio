<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/portfolio.css') }}">
    
    <title> @yield('title') | Ateliê Taigo Meireles</title>
</head>

<body>

    <section> 
        <header>
            <div class="container-fluid">
                <div class="row">
                    <nav class="navbar navbar-expand-md navbar-light bg-secondary" aria-label="Obras Disponíveis">
                        <div class="container-fluid px-5">
                            <div class="col-md-2">
                                <a class="navbar-brand" href="{{ route('categories.index') }}"><img src="{{ asset('assets/img/logo-green.png') }}" alt="Ateliê Taigo Meireles"></a>
                            </div>

                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="col-md-9">
                                <div class="row offcanvas offcanvas-end text-black bg-light" tabindex="-1"
                                    id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                                        <button type="button" class="btn-close btn-close-white"
                                            data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="col-md-11 offcanvas-body">
                                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="{{ route('categories.index') }}">Categoria</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" aria-current="page" href="{{ route('artists.index') }}">Artists</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="{{route('artists.index')}}"
                                                    id="offcanvasNavbarLgDropdown" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Artista
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarLgDropdown">
                                                    <li><a class="dropdown-item" href="#">Taigo Meireles</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Series</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Obras</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('techniques.index') }}">Técnica</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="flex-shrink-0 dropdown navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <a href="#" class="d-block link-success text-decoration-none dropdown-toggle"
                                        id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-person-bounding-box fs-4 text-success"></i>
                                    </a>
                                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser">
                                        <li><a class="dropdown-item" href="#">New project...</a></li>
                                        <li><a class="dropdown-item" href="#">Settings</a></li>
                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
    </section>