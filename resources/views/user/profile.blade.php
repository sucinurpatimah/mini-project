@extends('layouts.master')

@section('content')
    <div class="container">
        <section class="profile-section" style="margin-left: 200px">
            <div class="row justify-content-left">
                <div class="col-md-6">
                    <div class="profile-info text-center">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="profile-img mt-5" style="margin-left: 100px">
                                    <img src="{{ asset('assets/default_profile.png') }}" alt="Profil Image"
                                        class="rounded-circle mr-3" style="width: 100px; height: 100px;">
                                </div>
                            </div>
                            <div class="col-md-6 d-flex flex-column">
                                <div class="profile-username mt-5">
                                    <h5 style="font-weight: bold;">{{ auth()->user()->username }}</h5>
                                </div>
                                <div class="profile-stats mr-5 d-flex">
                                    <div class="mr-4">
                                        <p>0 Post</p>
                                    </div>
                                    <div class="mr-4">
                                        <p>0 Followers</p>
                                    </div>
                                    <div>
                                        <p>0 Following</p>
                                    </div>
                                </div>
                                <div class="profile-name ml-3">
                                    <small>{{ auth()->user()->name }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
