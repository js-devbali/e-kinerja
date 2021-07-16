@extends('layouts.main-layout')

@section('title', 'Kinerja Pegawai')

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
                    <li class="breadcrumb-item active" aria-current="page">Kinerja Pegawai</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header p-2 d-flex justify-content-center justify-content-lg-start justify-content-sm-start">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" id="tabAccount" href="#account" data-toggle="tab">Grafik Nilai Tugas Perbulan</a></li>
                        <li class="nav-item"><a class="nav-link" id="tabPersonal" href="#personal" data-toggle="tab">Tugas Bulanan</a></li>
                        <li class="nav-item"><a class="nav-link" id="tabPersonal" href="#personal" data-toggle="tab">Tugas Tambahan</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="account">
                            <canvas id="myChart_1"></canvas>
                        </div>
                        <div class="tab-pane" id="personal">
                            <form class="row g-1 my-2" action="">
                                <div class="col-4">
                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                        <option selected>Pilih bulan</option>
                                        <option value="1">Juni</option>
                                        <option value="2">Juli</option>
                                        <option value="3">Agustus</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                        <option selected>Pilih tahun</option>
                                        <option selected>2020</option>
                                        <option selected>2021</option>
                                    </select>
                                </div>
                                <div class="col-5">
                                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-search cari"></i> Cari</button>
                                </div>
                            </form>
                            <table id="table_1" class="table table-bordered border-0 table-hover small">
                                <thead class="text-center small">
                                    <tr class="bg-primary">
                                        <th>#</th>
                                        <th>Kegiatan Tahunan</th>
                                        <th>kegiatan</th>
                                        <th>Target</th>
                                        <th>Realisasi</th>
                                        <th>Penilaian</th>
                                        <th>Nilai Capaian SKP</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center small">
                                    <tr>
                                        <td><i class="far fa-check-circle text-success"></i></td>
                                        <td>Kegiatan tahunan yang harus dikerjakan</td>
                                        <td>Melakukan pemeriksaan sistem secara keseluruhan</td>
                                        <td>3 Dokumen</td>
                                        <td>5 Dokument</td>
                                        <td>Dokumen</td>
                                        <td><span class="badge badge-success">100 Baik</span></td>
                                    </tr>
                                    <tr>
                                        <td><i class="far fa-times-circle text-danger"></i></td>
                                        <td>Kegiatan tahunan yang harus dikerjakan</td>
                                        <td>Melakukan pemeriksaan sistem secara keseluruhan</td>
                                        <td>3 Dokumen</td>
                                        <td>5 Dokument</td>
                                        <td>Dokumen</td>
                                        <td><span class="badge badge-danger">20 Buruk</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-center"><p class="my-auto">Nilai Tugas Bulan Jul 2021</div>
                <div class="card-body my-auto">
                    <div class="row">
                        <div class="col-6 my-auto">
                            <img src="{{ asset('speedometer.png')}}" class="card-img-top my-auto bg-danger" alt="...">
                        </div>
                        <div class="col-6 my-auto text-center">
                            <div class="card card-body px-1 py-3 my-auto shadow-none border border-primary">
                                <span class="fs-3">Aktifitas Pokok</span>
                                <span class="fw-bold fs-1">10</span>
                            </div>
                            <div class="card card-body mt-2 px-1 py-3 my-auto shadow-none border border-primary">
                                <span class="fs-3">Aktifitas Tambahan</span>
                                <span class="fw-bold fs-1">15</span>
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
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#e-kinerja').addClass('menu-open');
            $('#e-kinerja-link').addClass('active');
            $('#kinerja-pegawai').addClass('active');

            $("#table_1").DataTable({
                "responsive": false, "lengthChange": true, "autoWidth": false,
                "searching": false,
                "paging": false,
                "info": false,
            });
        });
    </script>

    <script>
        const labels = [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember',
        ];

        const data = {
            labels: labels,
            datasets: [{
                label: 'Dataset',
                data: [65, 59, 80, 81, 56, 55, 40, 80, 70, 70, 95, 85],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(54, 162, 235, 0.4)',
                    'rgba(54, 162, 235, 0.4)'
                ],
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                plugins: {
                    legend: {
                        display: false,
                    }
                }
            },
        };
        let myChart = new Chart(
            document.getElementById('myChart_1'),
            config
        );
    </script>
@endpush
