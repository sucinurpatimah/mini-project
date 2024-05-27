@extends('layouts.master')
@section('content')
    <section>
        <!-- Navbar -->
        <div class="navbar-brand d-flex justify-content-center">
            <img src="{{ asset('assets/logo-medsos.png') }}" alt="Logo" width="50" height="50"
                style="margin-top: 20px">
        </div>
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top"
            style="margin-top: 4rem; margin-bottom: 1rem; display: flex; justify-content: space-between; align-items: center; padding: 1rem;">
            <div class="container">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active with-underline" href="#"
                                style="position: relative; color: #0dcaf0;">
                                For You
                                <span
                                    style="content: ''; position: absolute; left: 0; bottom: -2px; width: 100%; height: 2px; background-color: #0dcaf0;"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link following" href="#" style="color: white;">
                                Following
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Konten di bawah navbar -->
        <div class="container mt-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/default_profile.png') }}" alt="Profile Picture"
                                    class="rounded-circle mr-3" style="width: 50px; height: 50px; margin-right: 10px;">
                                <div>
                                    <h6 class="card-title mb-0">Nama Pengguna</h6>
                                    <small class="text-muted" style="font-size: 12px;">Jam Upload</small>
                                </div>
                            </div>
                            <p class="card-text mt-3" style="font-size: 14px;">isi caption kamu disini love</p>
                        </div>
                        <img src="{{ asset('assets/default_profile.png') }}" class="card-img-bottom" alt="Gambar"
                            style="max-height: 200px; width: auto; margin: 10px;">
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir konten tambahan -->
    </section>

    <section>
        <div class="recommendations" style="margin-top: 1rem; position: absolute; top: 20vh; right: 5vw; width: 250px;">
            <h6>Siapa yang harus diikuti</h6>
            <small class="text-muted">Orang yang mungkin anda kenal</small>
            <ul class="list-group list-group-flush">
                <li class="list-group-item border-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/default_profile.png') }}" class="rounded-circle mr-3"
                                style="width: 30px; height: 30px; margin-right: 10px;">
                            <div>
                                <h6 class="mb-0">sucinrptmh_</h6>
                                <p class="mb-0" style="font-size: 10px;">Suci Nurpatimah</p>
                            </div>
                        </div>
                        <a href="{{ route('login') }}" class="btn btn-dark text-info"
                            style="background-color: transparent; color: #17a2b8; border: none;">Follow</a>
                    </div>
                </li>
            </ul>
            <ul class="list-group list-group-flush">
                <li class="list-group-item border-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/default_profile.png') }}" class="rounded-circle mr-3"
                                style="width: 30px; height: 30px; margin-right: 10px;">
                            <div>
                                <h6 class="mb-0">faqys</h6>
                                <p class="mb-0" style="font-size: 10px;">Faqih Yuliaji Setiawan</p>
                            </div>
                        </div>
                        <a href="{{ route('login') }}" class="btn btn-dark text-info"
                            style="background-color: transparent; color: #17a2b8; border: none;">Follow</a>
                    </div>
                </li>
            </ul>
            <ul class="list-group list-group-flush">
                <li class="list-group-item border-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/default_profile.png') }}" class="rounded-circle mr-3"
                                style="width: 30px; height: 30px; margin-right: 10px;">
                            <div>
                                <h6 class="mb-0">trians</h6>
                                <p class="mb-0" style="font-size: 10px;">Tri Annisa</p>
                            </div>
                        </div>
                        <a href="{{ route('login') }}" class="btn btn-dark text-info"
                            style="background-color: transparent; color: #17a2b8; border: none;">Follow</a>
                    </div>
                </li>
            </ul>
            <hr>
        </div>
    </section>
@endsection
