@extends('layouts.master')
@section('content')
    <section>
        <div class="navbar-brand d-flex justify-content-center">
            <h5 style="margin-top: 40px">Notifikasi</h5>
        </div>
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark" style="margin: 10px 0; padding: 1rem;">
            <div class="container">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav" style="font-size: 14px;">
                        <li class="nav-item">
                            <a class="nav-link active with-underline" href="#"
                                style="position: relative; color: #0dcaf0; margin-right: 30px;">
                                Semua
                                <span
                                    style="content: ''; position: absolute; left: 0; bottom: -2px; width: 100%; height: 2px; background-color: #0dcaf0;"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link comments" href="#" style="color: white; margin-right: 30px;">
                                Komentar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link likes" href="#" style="color: white;">
                                Disukai
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
@endsection
