@extends('layouts.master')

@section('content')
    <section>
        <div class="navbar-brand d-flex justify-content-center">
            <img src="{{ asset('assets/logo-medsos.png') }}" alt="Logo" width="50" height="50"
                style="margin-top: 10px;">
        </div>
        <div class="d-flex justify-content-start" style="margin-left: 300px;">
            <a href="{{ auth()->check() ? route('user.index') : route('index') }}"
                style="color: white; text-decoration: none;">
                <i class="bi bi-chevron-left" style="font-size: 15px; font-weight: bold; margin-right: 5px;"></i>
                <span style="font-size: 15px;">Back</span>
            </a>
        </div>
        <div class="container mt-2 pt-3"
            style="max-width: 900px; margin: 0 auto; margin-bottom: 100px; margin-left: 300px;">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Bagian untuk postingan -->
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/default_profile.png') }}" alt="Profile Picture"
                                                class="rounded-circle mr-3"
                                                style="width: 50px; height: 50px; margin-right: 10px;">
                                            <div>
                                                <h6 class="card-title mb-0">{{ $posts->user->username }}</h6>
                                                <small class="text-muted"
                                                    style="font-size: 12px;">{{ $posts->created_at }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="card-text mt-3" style="font-size: 14px;">{{ $posts->caption }}</p>
                                    <img src="{{ asset($posts->image) }}" class="card-img-bottom img-fluid" alt="Post Image"
                                        style="max-height: 370px; width: calc(100% - 20px); margin: 10px; object-fit: cover;">
                                </div>
                                <div class="col-md-6">
                                    <!-- Bagian untuk komentar -->
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="d-flex align-items-center">
                                            <h6 class="card-title mb-0">komentar</h6>
                                            <small class="text-muted"
                                                style="font-size: 12px;">{{ $posts->comments }}</small>
                                        </div>
                                    </div>
                                    <hr style="margin-top: 120px">
                                    <div class="d-flex justify-content-between align-items-center"
                                        style="margin-bottom: 10px;">
                                        <div class="d-flex align-items-center">
                                            @guest
                                                <a href="{{ route('login') }}" class="btn btn-link"
                                                    style="padding: 0; margin-left: 10px;">
                                                    <i class="bi bi-heart" style="font-size: 14px; color: #17a2b8;"></i>
                                                </a>
                                                <a href="{{ route('login') }}" class="btn btn-link"
                                                    style="padding: 0; margin-left: 10px;">
                                                    <i class="bi bi-chat" style="font-size: 14px; color: #17a2b8;"></i>
                                                </a>
                                                <a href="{{ route('login') }}" class="btn btn-link"
                                                    style="padding: 0; margin-left: 10px;">
                                                    <i class="bi bi-send" style="font-size: 14px; color: #17a2b8;"></i>
                                                </a>
                                            @endguest
                                            @auth
                                                <button class="btn btn-link" style="padding: 0; margin-left: 10px;"
                                                    onclick="likePost({{ $posts->id }})">
                                                    <i class="bi bi-heart" style="font-size: 14px; color: #17a2b8;"></i>
                                                </button>
                                                <button class="btn btn-link"
                                                    style="padding: 0; margin-left: 10px; color: #17a2b8;"
                                                    onclick="commentPost({{ $posts->id }})">
                                                    <i class="bi bi-chat" style="font-size: 14px; color: #17a2b8;"></i>
                                                </button>
                                                <button class="btn btn-link" style="padding: 0; margin-left: 10px;"
                                                    onclick="sendPost({{ $posts->id }})">
                                                    <i class="bi bi-send" style="font-size: 14px; color: #17a2b8;"></i>
                                                </button>
                                            @endauth
                                        </div>
                                        <div class="d-flex align-items-center">
                                            @guest
                                                <a href="{{ route('login') }}" class="btn btn-link"
                                                    style="padding: 0; margin-right: 5px;">
                                                    <i class="bi bi-bookmarks" style="font-size: 14px; color: #17a2b8;"></i>
                                                </a>
                                            @endguest
                                            @auth
                                                <button class="btn btn-link" style="padding: 0; margin-right: 5px;"
                                                    onclick="bookmarkPost({{ $posts->id }})">
                                                    <i class="bi bi-bookmarks" style="font-size: 14px; color: #17a2b8;"></i>
                                                </button>
                                            @endauth
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <span style="margin-left: 10px; font-size: 12px;">{{ $posts->likes }}
                                                Likes</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <span
                                                style="margin-right: 5px; font-size: 12px;">{{ $posts->created_at->format('d M Y, H:i') }}</span>
                                        </div>
                                    </div><br>
                                    <form action="#" method="post" class="d-flex">
                                        <div class="form-group flex-grow-1 mr-2">
                                            <textarea class="form-control" name="comment" id="comment" rows="2" placeholder="Tambahkan komentar"
                                                style="border: none; border-bottom: 1px solid; resize: none; font-size: 12px; outline: none; height: 30px;"></textarea>
                                        </div>
                                        @guest
                                            <a href="{{ route('login') }}" class="btn btn-primary"
                                                style="background-color: transparent; color: white; border: none; font-size: 12px;">Kirim</a>
                                        @endguest
                                        @auth
                                            <button type="submit" class="btn btn-primary"
                                                style="background-color: transparent; color: white; border: none; font-size: 12px;">Kirim</button>
                                        @endauth
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @guest
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
        @endguest
    </section>
@endsection
