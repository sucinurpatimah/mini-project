<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="row row-gap-4 justify-content-center mt-4 mb-4">
        <div class="col-8">
            <div>
                <h2 class="text-center fw-bold my-3">Login</h2>
                <div class="card-body">
                    <form action="{{ route('login.authenticate') }}" method="POST">
                        @csrf
                        <!-- Error message -->
                        @if (session('success'))
                            <div class="d-flex justify-content-center">
                                <div class="alert alert-success alert-dismissible fade show" role="alert"
                                    style="font-size: 14px; background-color: #d4edda; border-color: #c3e6cb; color: #155724; max-width: 30rem; font-weight: bold;">
                                    {{ session('success') }}
                                </div>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="d-flex justify-content-center">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert"
                                    style="font-size: 14px; background-color: #f8d7da; border-color: #f5c6cb; color: #721c24; max-width: 30rem; font-weight: bold;">
                                    {{ session('error') }}
                                </div>
                            </div>
                        @endif

                        <div class="d-flex align-items-center mb-3">
                            <div class="me-4" style="margin-left: -40px;">
                                <img src="{{ asset('assets/logo-medsos.png') }}" alt="Logo"
                                    style="width: 100px; height: 100px;">
                            </div>
                            <div class="w-100">
                                <div class="mb-3">
                                    <label for="username" class="form-label" style="font-weight: bold">Username</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                                        id="username" name="username" required
                                        style="background-color: #fff; color: #000;" placeholder="Masukan username">
                                    @error('username')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label" style="font-weight: bold">
                                        Password
                                        <i class="bi bi-eye" id="togglePassword"
                                            style="color: #ffffff; margin-left: 10px; cursor: pointer;"></i>
                                    </label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" name="password" required
                                        style="background-color: #fff; color: #000;" placeholder="Masukan password">
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end my-3">
                            <button type="submit" class="btn btn-lg btn-light fw-bold"
                                style="width: auto; padding-left: 30px; padding-right: 30px">Login</button>
                        </div>

                        <div class="text-center">
                            <p>Belum Punya Akun? <a href="{{ route('register') }}"
                                    style="color: rgb(255, 255, 255); font-weight: bold;">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this;

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            }
        });
    </script>
</body>

</html>
