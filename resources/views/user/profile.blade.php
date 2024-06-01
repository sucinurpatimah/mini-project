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
                                <i class="bi bi-gear-fill text-white" id="settingIcon"
                                    style="font-size: 16px; position: absolute; top: 50px; right: 200px; cursor: pointer;"></i>
                            </div>
                            <div class="col-md-6 d-flex flex-column">
                                <div class="profile-username mt-5">
                                    <h5 style="font-weight: bold;">{{ auth()->user()->username }}</h5>
                                </div>
                                <div class="profile-stats-container d-flex flex-row align-items-center mr-5">
                                    <div class="mx-2">
                                        <p> {{ $jumlahPost }} Post</p>
                                    </div>
                                    <div class="mx-2">
                                        <p>0 Followers</p>
                                    </div>
                                    <div class="mx-2">
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
    <!-- Modal -->
    <div class="modal fade" id="confirmPasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Password</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="confirmPassword()"
                        style="background-color: transparent; border: none; font-weight: bold;">Konfirmasi</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Ketika pengguna mengklik tombol setting
        document.getElementById('settingIcon').addEventListener('click', function() {
            $('#confirmPasswordModal').modal('show'); // Tampilkan modal konfirmasi password
        });

        // Fungsi untuk memverifikasi password
        function confirmPassword() {
            var password = document.getElementById('password').value; // Ambil nilai password dari input
            // Kirim request AJAX untuk memverifikasi password
            $.ajax({
                url: '/verify-password', // Ganti dengan URL rute Anda untuk verifikasi password
                method: 'POST',
                data: {
                    password: password
                },
                success: function(response) {
                    if (response.success) {
                        window.location.href = response
                        .redirect; // Arahkan ke halaman edit profil jika verifikasi berhasil
                    } else {
                        alert(
                        'Password is incorrect. Please try again.'); // Tampilkan pesan kesalahan jika verifikasi gagal
                    }
                },
                error: function(err) {
                    console.error('Error:', err);
                }
            });
        }
    </script>
@endsection
