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
                            <a class="nav-link active with-underline" href="{{ route('user.index') }}"
                                style="position: relative; color: #0dcaf0;">
                                For You
                                <span
                                    style="content: ''; position: absolute; left: 0; bottom: -2px; width: 100%; height: 2px; background-color: #0dcaf0;"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link following" href="{{ route('user.index') }}" style="color: white;">
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
                        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/default_profile.png') }}" alt="Profile Picture"
                                            class="rounded-circle mr-3"
                                            style="width: 50px; height: 50px; margin-right: 10px;">
                                        <div>
                                            <h6 class="card-title mb-0 align-items-center">
                                                {{ auth()->user()->username }}</h6>
                                        </div>
                                    </div>
                                    <div>
                                        <i class="bi bi-three-dots"></i>
                                    </div>
                                </div><br>
                                <textarea id="caption" name="caption" rows="4" cols="50" style="outline: none;"></textarea>
                                <input type="file" class="img-fluid" name="image"
                                    style="max-height: 200px; width: auto; margin: 10px;">
                                <hr style="width: 100%; margin: 0 auto; margin-bottom: 10px;">
                                <div class="d-flex justify-content-end" style="margin-bottom: 10px;">
                                    <button type="submit" class="btn btn-dark btn-sm"
                                        style="background-color: #17a2b8; color: white;">Posting</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Akhir konten tambahan -->
    </section>
@endsection
