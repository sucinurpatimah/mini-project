@extends('layouts.master')
@section('title', 'Halaman Utama')
@section('content')
    <section>
        <!-- Navbar -->
        <div class="navbar-brand d-flex justify-content-center">
            <img src="{{ asset('assets/logo-medsos.png') }}" alt="Logo" width="50" height="50"
                style="margin-top: 20px;">
        </div>
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top"
            style="margin-top: 4rem; margin-bottom: 1rem; display: flex; justify-content: space-between; align-items: center; padding: 1rem;">
            <div class="container">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active with-underline" href="#"
                                style="position: relative; color: #ffffff; margin-right: 40px;">
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
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/default_profile.png') }}" alt="Profile Picture"
                                        class="rounded-circle mr-3" style="width: 50px; height: 50px; margin-right: 10px;">
                                    <div>
                                        <h6 class="card-title mb-0">Nama Pengguna</h6>
                                        <small class="text-muted" style="font-size: 12px;">Jam Upload</small>
                                    </div>
                                </div>
                                <div>
                                    <i class="bi bi-bookmarks" style="font-size: 15px;"></i>
                                </div>
                            </div>
                            <p class="card-text mt-3" style="font-size: 14px;">isi caption kamu disini love</p>
                        </div>
                        <img src="{{ asset('assets/default_profile.png') }}" class="card-img-bottom" alt="Gambar"
                            style="max-height: 200px; width: auto; margin: 10px;">
                        <hr style="width: calc(100% - 20px); margin: 0 auto; margin-bottom: 10px;">
                        <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 10px;">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-heart" style="font-size: 14px; margin-left: 10px;"></i>
                                <span style="margin-left: 5px; font-size: 12px;">Like</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-chat" style="font-size: 14px; margin-right: 5px;"></i>
                                <span style="font-size: 12px; margin-right: 10px;">Comment</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Akhir konten tambahan -->
    </section>


    <section>
        <div class="recommendations" style="margin-top: 1rem; top: 20vh; right: 5vw; width: 250px; position: fixed;">
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
                        <a href="{{ route('login') }}" class="btn btn-dark"
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
                        <a href="{{ route('login') }}" class="btn btn-dark"
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
                        <a href="{{ route('login') }}" class="btn btn-dark"
                            style="background-color: transparent; color: #17a2b8; border: none;">Follow</a>
                    </div>
                </li>
            </ul>
            <hr>
        </div>

        <div id="news" class="text-light px-4 py-2"
            style="position: fixed; bottom: 0; left: 0; right: 0; z-index: 1000; background-color: #17a2b8;">
            <div class="d-flex align-items-center">
                <div style="margin-left: 70px;">
                    <span style="font-weight: bold;">Jangan ketinggalan berita terbaru</span>
                    <p class="mb" style="font-size: 14px;">login, untuk pengalaman yang baru</p>
                </div>
                <div class="ms-auto" style="margin-right: 70px;">
                    <a href="{{ route('login') }}" class="btn btn-outline-light text-white"
                        style="font-weight: bold; border-radius: 10px; background-color: transparent; border-color: white; color: white; transition: none;">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-light text-black"
                        style="font-weight: bold; border-radius: 10px; margin-left: 10px; background-color: white; color: black; border-color: white; transition: none;">Register</a>
                </div>
            </div>
        </div>
    </section>
@endsection
