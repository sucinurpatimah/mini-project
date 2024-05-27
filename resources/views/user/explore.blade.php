@extends('layouts.master')
@section('content')
    <section>
        <!-- Navbar -->
        <div class="navbar-brand d-flex justify-content-center">
            <img src="{{ asset('assets/logo-medsos.png') }}" alt="Logo" width="50" height="50"
                style="margin-top: 20px">
        </div>

        <!-- Kotak Pencarian -->
        <div class="container mt-2 pt-3"> <!-- Mengubah nilai margin top -->
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('user.explore') }}" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control rounded" placeholder="Cari user" name="query"
                                style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                            <span class="input-group-text" style="background-color: transparent; border: none;">
                                <i class="bi bi-search" style="color: #17a2b8;"></i>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Akhir Konten Pencarian -->
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
