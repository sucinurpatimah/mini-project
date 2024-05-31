@extends('layouts.master')

@section('content')
    <section>
        <div class="navbar-brand d-flex justify-content-center">
            <img src="{{ asset('assets/logo-medsos.png') }}" alt="Logo" width="50" height="50"
                style="margin-top: 10px;">
        </div>
        <div class="w-100 d-flex justify-content-start" style="margin-left: 300px;">
            <a href="{{ auth()->check() ? route('user.index') : route('index') }}"
                style="color: white; text-decoration: none;">
                <i class="bi bi-chevron-left" style="font-size: 15px; font-weight: bold; margin-right: 5px;"></i>
                <span style="font-size: 15px;">Back</span>
            </a>
        </div>
        <div class="container mt-2 pt-3" style="max-width: 900px; margin: 0 auto; margin-bottom: 50px; margin-left: 300px;">
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
                                        style="margin-bottom: 10px; color: #17a2b8;"">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-heart" style="font-size: 14px; margin-left: 10px;"></i>
                                            <i class="bi bi-send" style="font-size: 14px; margin-left: 10px;"></i>
                                            <i class="bi bi-chat" style="font-size: 14px; margin-left: 10px;"></i>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-bookmarks" style="font-size: 14px; margin-right: 5px;"></i>
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
                                        <button type="submit" class="btn btn-primary"
                                            style="background-color: transparent; color: white; border: none; font-size: 12px;">Kirim</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
