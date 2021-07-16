@extends('layouts.main-layout')

@section('title', 'Profil Pribadi')

@push('css')
    <style>
        .image {
            width: 200px;
            height: 200px;
            overflow: hidden;
        }
        .image img {
            object-fit: cover;
            width: 200px;
            height: 200px;
        }
    </style>
@endpush

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3 col-lg-auto text-center text-md-start">Manajemen Akun</h1>
        <div class="col-auto ml-auto text-right mt-n1">
            <nav aria-label="breadcrumb text-center">
                <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('Dashboard') }}">Sistem Minitoring</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile pribadi</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center mb-3">
                            <div class="image mx-auto d-block rounded">
                                <img class="profile-user-img img-fluid img-circle mx-auto d-block" src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8ZW1wbG95ZWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="profile_pribadi" width="150" height="150">
                            </div>
                        </div>
                        <a data-bs-toggle="modal" data-bs-target="#changeProfileImg" class="btn btn-sm btn-outline-dark btn-block">
                            Ganti Foto Profil
                        </a>
                        {{-- @include('admin.auth.profile.change-profile-img') --}}
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header my-auto">
                        <p class="btn btn-primary my-auto">Profile Pribadi</p>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="terdaftar" class="col-sm-12 col-md-3 col-form-label my-auto">Nama</label>
                            <div class="col-sm-12 col-md-9 my-auto">
                                <div class="form-control">
                                    Nama Lengkap Pegawai
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="terdaftar" class="col-sm-12 col-md-3 col-form-label my-auto">NPP</label>
                            <div class="col-sm-12 col-md-9 my-auto">
                                <div class="form-control">
                                    180555104120000125
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="terdaftar" class="col-sm-12 col-md-3 col-form-label my-auto">Pangkat/Golongan</label>
                            <div class="col-sm-12 col-md-9 my-auto">
                                <div class="form-control">
                                    Pangkat/Golongan Pegawai
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="terdaftar" class="col-sm-12 col-md-3 col-form-label my-auto">Jabatan</label>
                            <div class="col-sm-12 col-md-9 my-auto">
                                <div class="form-control">
                                    Jabatan Pegawai
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="terdaftar" class="col-sm-12 col-md-3 col-form-label my-auto">Unit Kinerja</label>
                            <div class="col-sm-12 col-md-9 my-auto">
                                <div class="form-control">
                                    Unit Kerja Pegawai
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="terdaftar" class="col-sm-12 col-md-3 col-form-label my-auto">Alamat</label>
                            <div class="col-sm-12 col-md-9 my-auto">
                                <div class="form-control">
                                    Jl. Alamat Pegawai Gg ABC No.123
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="terdaftar" class="col-sm-12 col-md-3 col-form-label my-auto">Nomor Telp</label>
                            <div class="col-sm-12 col-md-9 my-auto">
                                <div class="form-control">
                                    08123456789xxx
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    @if($message = Session::get('success'))
        <script>
            $(document).ready(function(){
                alertSuccess('{{$message}}');
            });
        </script>
    @endif

    @if($message = Session::get('error'))
        <script>
            $(document).ready(function(){
                alertError('{{$message}}');
            });
        </script>
    @endif

    @if($message = Session::get('failed'))
        <script>
            $(document).ready(function(){
                alertDanger('{{$message}}');
            });
        </script>
    @endif

    @if ($errors->has('password_lama') || $errors->has('password'))
        <script>
                $('#tabAccount').removeClass('active');
                $('#account').removeClass('active');
                $('#tabPassword').addClass('active');
                $('#password').addClass('active');
        </script>
    @endif

    <script>
        $(document).ready(function(){
            $('#authentication').addClass('menu-is-opening menu-open');
            $('#authentication-link').addClass('active');
            $('#profile').addClass('active');
        });

        function oldPasswordVisibility() {
            let toggle = document.getElementById('inputPasswordLama');
            let icon = document.getElementById('oldPassIcon');

            if (toggle.type == 'password') {
                toggle.type = 'text';
                icon.classList.remove('fa-eye-slash')
                icon.classList.add('fa-eye')
            } else {
                toggle.type = 'password';
                icon.classList.remove('fa-eye')
                icon.classList.add('fa-eye-slash')
            }
        }

        function newPasswordVisibility() {
            let toggle = document.getElementById('inputPassword');
            let icon = document.getElementById('newPassIcon');

            if (toggle.type == 'password') {
                toggle.type = 'text';
                icon.classList.remove('fa-eye-slash')
                icon.classList.add('fa-eye')
            } else {
                toggle.type = 'password';
                icon.classList.remove('fa-eye')
                icon.classList.add('fa-eye-slash')
            }
        }

        function confirmPasswordVisibility() {
            let toggle = document.getElementById('inputPasswordConfirmation');
            let icon = document.getElementById('confirmPassIcon');

            if (toggle.type == 'password') {
                toggle.type = 'text';
                icon.classList.remove('fa-eye-slash')
                icon.classList.add('fa-eye')
            } else {
                toggle.type = 'password';
                icon.classList.remove('fa-eye')
                icon.classList.add('fa-eye-slash')
            }
        }
    </script>
@endpush

