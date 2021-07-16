@extends('layouts.main-layout')

@section('title', 'Aktivitas Harian')

@push('css')
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet" crossorigin="anonymous">
@endpush

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3 col-lg-auto text-center text-md-start">E-Kinerja</h1>
        <div class="col-auto ml-auto text-right mt-n1">
            <nav aria-label="breadcrumb text-center">
                <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('Dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Aktifitas Harian</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="text-end mb-3">
                <a href="{{ route('Catatan Harian') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Buat Catatan</a>
            </div>
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
                            <table id="table_1" class="table table-responsive-sm table-bordered table-hover">
                                <thead class="text-center small">
                                    <tr class="bg-primary">
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Target</th>
                                        <th>Pengajuan</th>
                                        <th>Tugas Bulan</th>
                                        <th>Deskripsi</th>
                                        <th>Output</th>
                                        <th>Output Bulanan</th>
                                        <th>Output Harian</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center small">
                                    <tr>
                                        <td>1</td>
                                        <td>16 Jul 2021</td>
                                        <td>09.30 s/d 14.00</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>Mengatur transaksi pelayanan</td>
                                        <td>Menyelesaikan dokumen-dokument terkait dengan transaksi pelayanan</td>
                                        <td>Berhasil menyelesaikan dokumen-dokument terkait dengan transaksi pelayanan</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>Jenis perkerjaan yang dilakukan WFH</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>16 Jul 2021</td>
                                        <td>09.30 s/d 14.00</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>Mengatur transaksi pelayanan</td>
                                        <td>Menyelesaikan dokumen-dokument terkait dengan transaksi pelayanan</td>
                                        <td>Berhasil menyelesaikan dokumen-dokument terkait dengan transaksi pelayanan</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>Jenis perkerjaan yang dilakukan WFH</td>
                                    </tr>
                                </tbody>
                            </table>  
                        </div>
                        <div class="tab-pane text-end" id="personal">
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6 my-auto">
                            <p class="my-auto">Tugas Jabatan</p>
                        </div>
                        <div class="col-6 my-auto text-end">
                            <button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Buat Catatan</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                </div>
            </div> --}}
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
