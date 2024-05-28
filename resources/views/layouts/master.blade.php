<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>@yield('title')</title>
</head>

<body>
    <div id="sidebar" class="bg-dark text-light"
        style="min-width: 250px; max-width: 250px; padding: 1rem; height: 100vh; position: fixed; border-right: 1px solid #ccc; overflow-y: auto;">
        <div class="d-flex flex-column align-items-start mb-3">
            <div class="d-flex align-items-center">
                @if (auth()->check())
                    @if (auth()->user()->profile_image)
                        <img src="{{ asset('' . auth()->user()->profile_image) }}" alt="Profile Image" width="30px"
                            height="30px" class="me-2 rounded-circle">
                    @else
                        <a href="{{ route('user.profile') }}">
                            <i class="bi bi-person-circle"
                                style="font-size: 50px; margin-right: 10px; color: white;"></i>
                        </a>
                    @endif
                    <div>
                        <span>{{ auth()->user()->username }}</span><br>
                        <small class="text-muted">{{ auth()->user()->name }}</small>
                    </div>
                @else
                    <!-- If user is not logged in, show the logo -->
                    <img src="{{ asset('assets/logo-medsos.png') }}" alt="Logo" width="50" height="50"
                        class="me-2">
                    <div>
                        <span>Silahkan Login Dahulu</span><br>
                        <small class="text-muted">Ayo Login</small>
                    </div>
                @endif
            </div>
        </div>

        <hr>
        <ul class="nav flex-column">
            @if (auth()->check())
                <!-- Check if user is logged in -->
                <li class="nav-item">
                    @if (auth()->check())
                        <!-- Check if user is logged in -->
                        <a class="nav-link text-light" href="{{ route('user.index') }}"
                            style="display: flex; align-items: center; margin-bottom: 5px;">
                            <i class="bi bi-house-door-fill" style="margin-right: 30px; color: #17a2b8;"></i>
                            Beranda
                        </a>
                    @else
                        <!-- If user is not logged in -->
                        <a class="nav-link text-light" href="{{ route('index') }}"
                            style="display: flex; align-items: center; margin-bottom: 5px;">
                            <i class="bi bi-house-door-fill" style="margin-right: 30px; color: #17a2b8;"></i>
                            Beranda
                        </a>
                    @endif
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('user.explore') }}"
                        style="display: flex; align-items: center; margin-bottom: 5px;">
                        <i class="bi bi-search" style="margin-right: 30px; color: #17a2b8;"></i>
                        Explore
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"
                        style="display: flex; align-items: center; margin-bottom: 5px;">
                        <i class="bi bi-bell-fill" style="margin-right: 30px; color: #17a2b8;"></i>
                        Notifikasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('user.addPost') }}""
                        style="display: flex; align-items: center; margin-bottom: 5px;">
                        <i class="bi bi-plus-lg" style="margin-right: 30px; color: #17a2b8;"></i>
                        Posting
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"
                        style="display: flex; align-items: center; margin-bottom: 5px;">
                        <i class="bi bi-bookmarks-fill" style="margin-right: 30px; color: #17a2b8;"></i>
                        Bookmarks
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('logout') }}"
                        style="display: flex; align-items: center; margin-bottom: 5px;">
                        <i class="bi bi-arrow-left" style="margin-right: 30px; color: #17a2b8;"></i>
                        Logout
                    </a>
                </li>
            @else
                <!-- If user is not logged in -->
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('index') }}"
                        style="display: flex; align-items: center; margin-bottom: 5px;">
                        <i class="bi bi-house-door-fill" style="margin-right: 30px; color: #17a2b8;"></i>
                        Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('user.explore') }}"
                        style="display: flex; align-items: center; margin-bottom: 5px;">
                        <i class="bi bi-search" style="margin-right: 30px; color: #17a2b8;"></i>
                        Explore
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('login') }}"
                        style="display: flex; align-items: center; margin-bottom: 5px;">
                        <i class="bi bi-arrow-left" style="margin-right: 30px; color: #17a2b8;"></i>
                        Login
                    </a>
                </li>
            @endif
        </ul>
    </div>

    <div id="content">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        document.querySelectorAll('#sidebar .nav-link').forEach(function(link) {
            link.addEventListener('click', function() {
                if (this.style.backgroundColor === 'rgb(23, 162, 184)') {
                    this.style.backgroundColor = ''; // Reset background color
                    this.style.color = ''; // Reset font color
                } else {
                    document.querySelectorAll('#sidebar .nav-link').forEach(function(nav) {
                        nav.style.backgroundColor = ''; // Reset background color
                        nav.style.color = ''; // Reset font color
                    });
                    this.style.backgroundColor = '#17a2b8'; // Bootstrap bg-info color
                    this.style.color = 'white'; // Change font color to white
                }
            });
        });
    </script>


</body>

</html>
