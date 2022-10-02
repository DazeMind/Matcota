<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('/img/matcota/logo.png')}}" alt="" srcset="" width="40px" height="40px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li><a href="#contactanos" class="nav-link px-2 link-secondary"><strong>Llámanos: </strong> +56 9 1234 1234 </a></li>
                        <li><a href="#" class="nav-link px-2 link-secondary"><strong>Email: </strong> hola@matcota.cl</a></li>
                        <li>
                            <button type="button" class="btn btn-outline-primary ms-2">Acceder</button>
                        </li>
                        <li>
                            <div class="dropdown ms-5">
                                <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Inicio
                                </a>
                                <ul class="dropdown-menu text-small shadow" style="">
                                  <li><a class="dropdown-item active" href="#" aria-current="page">Nosotros</a></li>
                                </ul>
                            </div>                        
                            <div class="dropdown">
                                <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                  <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                                </a>
                                <ul class="dropdown-menu text-small shadow" style="">
                                  <li><a class="dropdown-item active" href="#" aria-current="page">Overview</a></li>
                                  <li><a class="dropdown-item" href="#">Invenasdasdtory</a></li>
                                  <li><a class="dropdown-item" href="#">Customers</a></li>
                                  <li><a class="dropdown-item" href="#">Products</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Reports</a></li>
                                  <li><a class="dropdown-item" href="#">Analytics</a></li>
                                </ul>
                            </div>                        
                        </li>
                    </ul>
                </div>
                
            </div>
     
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
