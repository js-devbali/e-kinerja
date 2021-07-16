@extends('layouts.main-layout')

@section('title', 'Aktivitas Harian | Tambah Catatan')

@push('css')
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet" crossorigin="anonymous">
@endpush

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3 col-lg-auto text-center text-md-start">E-Kinerja</h1>
        <div class="col-auto ml-auto text-right mt-n1">
            <nav aria-label="breadcrumb text-center">
                <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('Aktivitas Harian') }}">Aktivitas Harian</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah catatan</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header p-2 d-flex justify-content-center justify-content-lg-start justify-content-sm-start">
                    <ul class="nav nav-pills">
                        <li class="nav-item small"><a class="nav-link active" id="tabAccount" href="#account" data-toggle="tab">Tugas Jabatan</a></li>
                        <li class="nav-item small"><a class="nav-link" id="tabPersonal" href="#personal" data-toggle="tab">Tugas Tambahan</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="account">
                            <form action="" method="POST" class="form-horizontal needs-validation" enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-12 col-md-2 col-form-label">Tanggal<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-10 my-auto">
                                        <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Pilih tanggal" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-12 col-md-2 col-form-label">Waktu<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-10 my-auto">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Waktu Mulai" aria-label="Username">
                                            <span class="input-group-text">s/d</span>
                                            <input type="text" class="form-control" placeholder="Waktu Berakhir" aria-label="Server">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik" class="col-sm-12 col-md-2 col-form-label">Jenis Tugas<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-10 my-auto">
                                        <input name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Tugas Jabatan" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nomor_telepon" class="col-sm-12 col-md-2 col-form-label">Tugas Bulanan<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-10 my-auto">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih tugas bulanan</option>
                                            <option value="1">Satu</option>
                                            <option value="2">Dua</option>
                                            <option value="3">Tiga</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nomor_telepon" class="col-sm-12 col-md-2 col-form-label">Deskripsi Pekerjaan<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-10 my-auto">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nomor_telepon" class="col-sm-12 col-md-2 col-form-label">Output<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-10 my-auto">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nomor_telepon" class="col-sm-12 col-md-2 col-form-label">Jenis Penjadwalan Kerja<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-10 my-auto">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih penjadwalan kerja</option>
                                            <option value="1">WFO/Tugas Kedinasan</option>
                                            <option value="2">WFH</option>
                                            <option value="3">Lain-lain</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group text-end my-2">
                                    <span class="text-danger">* Data Wajib Diisi</span>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-sm-12 text-end">
                                        <a href="{{ route('Aktivitas Harian Result') }}" class="btn btn-sm btn-outline-success my-1">Simpan Catatan</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="personal">
                            <form action="" method="POST" class="form-horizontal needs-validation" enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-12 col-md-3 col-form-label">Tanggal<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-9 my-auto">
                                        <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Pilih tanggal" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-12 col-md-3 col-form-label">Waktu<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-9 my-auto">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Waktu Mulai" aria-label="Username">
                                            <span class="input-group-text">s/d</span>
                                            <input type="text" class="form-control" placeholder="Waktu Berakhir" aria-label="Server">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik" class="col-sm-12 col-md-3 col-form-label">Jenis Tugas<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-9 my-auto">
                                        <input name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Tugas Tambahan" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-12 col-md-3 col-form-label">Tugas Tambahan<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-9 my-auto">
                                        <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan tugas tambahan" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-12 col-md-3 col-form-label">No. Keputusan/Surat Tugas/Surat Keterangan<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-9 my-auto">
                                        <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan No. Keputusan/Surat Tugas/Surat Keterangan" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-12 col-md-3 col-form-label">Jangka Waktu<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-9 my-auto">
                                        <div class="input-group">
                                            <input type="text" class="form-control" aria-label="Jangka waktu">
                                            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Rentan</button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Hari</a></li>
                                                <li><a class="dropdown-item" href="#">Bulan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nomor_telepon" class="col-sm-12 col-md-3 col-form-label">Deskripsi Pekerjaan<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-9 my-auto">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nomor_telepon" class="col-sm-12 col-md-3 col-form-label">Output<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-9 my-auto">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nomor_telepon" class="col-sm-12 col-md-3 col-form-label">File Laporan<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-9 my-auto">
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nomor_telepon" class="col-sm-12 col-md-3 col-form-label">Jenis Penjadwalan Kerja<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-9 my-auto">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih penjadwalan kerja</option>
                                            <option value="1">WFO/Tugas Kedinasan</option>
                                            <option value="2">WFH</option>
                                            <option value="3">Lain-lain</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group text-end my-2">
                                    <span class="text-danger">* Data Wajib Diisi</span>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-sm-12 text-end">
                                        <a href="{{ route('Aktivitas Harian Result') }}" class="btn btn-sm btn-outline-success my-1">Simpan Catatan</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#e-kinerja').addClass('menu-open');
            $('#e-kinerja-link').addClass('active');
            $('#aktivitas-harian').addClass('active');

            $("#table_1").DataTable({
                "responsive": false, "lengthChange": true, "autoWidth": false,
                "oLanguage": {
                    "sSearch": "Cari:",
                    "sZeroRecords": "Data tugas jabatan tidak ditemukan",
                    "sSearchPlaceholder": "Cari tugas jabatan ...",
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
