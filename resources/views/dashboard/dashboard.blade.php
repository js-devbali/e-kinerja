@extends('layouts.main-layout')

@section('title', 'Dashboard')

@push('css')
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet" crossorigin="anonymous">
@endpush

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3 col-lg-auto text-center text-md-start">Home</h1>
        <div class="col-auto ml-auto text-right mt-n1">
            <nav aria-label="breadcrumb text-center">
                <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('Dashboard') }}">E-Kinerja</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row g-2 mt-2">
                <div class="col-6 my-auto">
                    <div class="card border-0 my-auto">
                        <a href="" class="callout callout-info text-decoration-none link-dark my-auto">
                            <p class="my-auto"><i class="fas fa-external-link-alt mr-2"></i>Kinerja 2021</p>
                        </a>
                    </div>
                </div>
                <div class="col-6 my-1">
                    <div class="card border-0 my-auto">
                        <a href="" class="callout callout-info text-decoration-none link-dark my-auto">
                            <p class="my-auto"><i class="fas fa-external-link-alt mr-2"></i>Kinerja Pegawai</p>
                        </a>
                    </div>
                </div>
                <div class="col-6 my-1">
                    <div class="card border-0 my-auto">
                        <a href="" class="callout callout-info text-decoration-none link-dark my-auto">
                            <p class="my-auto"><i class="fas fa-external-link-alt mr-2"></i>Aktivitas Harian</p>
                        </a>
                    </div>
                </div>
                <div class="col-6 my-1">
                    <div class="card border-0 my-auto">
                        <a href="" class="callout callout-info text-decoration-none link-dark my-auto">
                            <p class="my-auto"><i class="fas fa-external-link-alt mr-2"></i>Pengaturan Akun</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header text-center bg-primary my-auto">Profile Pribadi</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="terdaftar" class="col-sm-12 col-md-2 col-form-label my-auto">Nama</label>
                        <div class="col-sm-12 col-md-10 my-auto">
                            <div class="form-control">
                                Nama Lengkap Pegawai
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="terdaftar" class="col-sm-12 col-md-2 col-form-label my-auto">NPP</label>
                        <div class="col-sm-12 col-md-10 my-auto">
                            <div class="form-control">
                                180555104120000125
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="terdaftar" class="col-sm-12 col-md-2 col-form-label my-auto">Pangkat/Golongan</label>
                        <div class="col-sm-12 col-md-10 my-auto">
                            <div class="form-control">
                                Pangkat/Golongan Pegawai
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="terdaftar" class="col-sm-12 col-md-2 col-form-label my-auto">Jabatan</label>
                        <div class="col-sm-12 col-md-10 my-auto">
                            <div class="form-control">
                                Jabatan Pegawai
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="terdaftar" class="col-sm-12 col-md-2 col-form-label my-auto">Unit Kinerja</label>
                        <div class="col-sm-12 col-md-10 my-auto">
                            <div class="form-control">
                                Unit Kerja Pegawai
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="terdaftar" class="col-sm-12 col-md-2 col-form-label my-auto">Alamat</label>
                        <div class="col-sm-12 col-md-10 my-auto">
                            <div class="form-control">
                                Jl. Alamat Pegawai Gg ABC No.123
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="terdaftar" class="col-sm-12 col-md-2 col-form-label my-auto">Nomor Telp</label>
                        <div class="col-sm-12 col-md-10 my-auto">
                            <div class="form-control">
                                08123456789xxx
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#dashboard').addClass('menu-open');
            $('#dashboard-link').addClass('active');

            $("#tableHistory").DataTable({
                "responsive": false, "lengthChange": true, "autoWidth": false,
                "oLanguage": {
                    "sSearch": "Cari:",
                    "sZeroRecords": "Data riwayat kegiatan tidak ditemukan",
                    "sSearchPlaceholder": "Cari riwayat kegiatan ...",
                    "infoEmpty": "Menampilkan 0 Data",
                    "infoFiltered": "(dari _MAX_ Data)",
                    "sLengthMenu": "Tampilkan _MENU_ data",
                },
                "language": {
                    "paginate": {
                        "previous": 'Sebelumnya',
                        "next": 'Berikutnya'
                    },
                    "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                },
            });
        });
    </script>
@endpush