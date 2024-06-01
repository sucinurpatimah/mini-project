@extends('layouts.master')
@section('content')
    <section>
        <div class="navbar-brand d-flex justify-content-center">
            <img src="{{ asset('assets/logo-medsos.png') }}" alt="Logo" width="50" height="50"
                style="margin-top: 10px;">
        </div>
        <div class="d-flex justify-content-start" style="margin-left: 300px; margin-top: 40px;">
            <h6>All Bookmarks</h6>
        </div>

        <div class="container pt-3">
            <div class="row justify-content-center">
                <div class="col-md-3">
                </div>
                <div class="col-md-9">
                    <div class="row justify-content-center">
                        @foreach ($posts as $post)
                            <div class="col-md-4 mb-4">
                                <div class="card" style="height: 100%;">
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('assets/default_profile.png') }}" alt="Profile Picture"
                                                    class="rounded-circle mr-3"
                                                    style="width: 50px; height: 50px; margin-right: 10px;">
                                                <div>
                                                    <h6 class="card-title mb-0">{{ $post->user->username }}</h6>
                                                    <small class="text-muted"
                                                        style="font-size: 12px;">{{ $post->created_at }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('post.seePost', $post->id) }}">
                                        <div style="overflow: hidden; height: 250px; margin: 7px;">
                                            <img src="{{ asset($post->image) }}" class="card-img-bottom img-fluid"
                                                alt="Post Image" style="height: 100%; object-fit: cover;">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
