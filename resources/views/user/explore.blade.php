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
                    <form action="{{ route('user.search') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control rounded" placeholder="Cari user" name="query"
                                style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                            <button class="btn" type="submit" style="background-color: transparent; border: none;">
                                <i class="bi bi-search" style="color: #17a2b8;"></i>
                            </button>
                        </div>
                    </form>
                    @if (isset($message))
                        <div class="alert alert-danger">{{ $message }}</div>
                    @endif

                    @if (isset($users))
                        <ul class="list-group">
                            @foreach ($users as $user)
                                <h5>Hasil Pencarianmu</h5>
                                <li class="list-group-item" style="border: none;">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/default_profile.png') }}" alt="Profile Picture"
                                                class="rounded-circle mr-3"
                                                style="width: 30px; height: 30px; margin-right: 10px;">
                                            <div>
                                                <h6 class="mb-0">
                                                    <a href="{{ route('login') }}"
                                                        style="color: inherit; text-decoration: none;">
                                                        {{ $user->username }}
                                                    </a>
                                                </h6>
                                                <p class="mb-0" style="font-size: 12px;">{{ $user->name }}</p>
                                            </div>
                                        </div>
                                        <a href="{{ route('login') }}" class="btn btn-dark"
                                            style="background-color: transparent; color: #17a2b8; border: none;">Follow</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
        <!-- Akhir Konten Pencarian -->
    </section>

    <section>
        <div class="recommendations" style="margin-top: 1rem; position: absolute; top: 20vh; right: 5vw; width: 250px;">
            <h6>Siapa yang harus diikuti</h6>
            <small class="text-muted">Orang yang mungkin anda kenal</small>

            @php
                $users = [
                    [
                        'username' => 'sucinurrr',
                        'name' => 'Suci Nurpatimah',
                        'profile_img' => 'assets/default_profile.png',
                    ],
                    [
                        'username' => 'faqys',
                        'name' => 'Faqih Yuliaji Setiawan',
                        'profile_img' => 'assets/default_profile.png',
                    ],
                    [
                        'username' => 'trians',
                        'name' => 'Tri Annisa',
                        'profile_img' => 'assets/default_profile.png',
                    ],
                ];
                $loggedInUsername = Auth::check() ? Auth::user()->username : null;
            @endphp

            @foreach ($users as $user)
                @if ($user['username'] !== $loggedInUsername)
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item border-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset($user['profile_img']) }}" class="rounded-circle mr-3"
                                        style="width: 30px; height: 30px; margin-right: 10px;">
                                    <div>
                                        <h6 class="mb-0">{{ $user['username'] }}</h6>
                                        <p class="mb-0" style="font-size: 10px;">{{ $user['name'] }}</p>
                                    </div>
                                </div>
                                <a href="{{ route('login') }}" class="btn btn-dark"
                                    style="background-color: transparent; color: #17a2b8; border: none;">Follow</a>
                            </div>
                        </li>
                    </ul>
                @endif
            @endforeach


            <hr>
        </div>
    </section>
@endsection
