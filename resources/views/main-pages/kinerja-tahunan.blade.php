@extends('layouts.main-layout')

@section('title', 'Kinerja Tahunan')

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
                    <li class="breadcrumb-item active" aria-current="page">Kinerja 2021</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <div class="card mb-3">
                        <div class="card-header">Pejabat Penilai</div>
                        <div class="row g-0 p-0">
                            <div class="col-md-4 my-auto">
                                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8ZW1wbG95ZWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid rounded-start p-1" alt="...">
                            </div>
                            <div class="col-md-8 my-auto">
                                <div class="card-body small">
                                    <span class="fw-bold">NPP</span>
                                    <p class="card-text">180555104120000125</p>
                                    <span class="fw-bold mt-1">Pangkat/Golongan</span>
                                    <p class="card-text">Pangkat/Golongan Pegawai</p>
                                    <span class="fw-bold mt-1">Jabatan</span>
                                    <p class="card-text">Jabatan Pegawai</p>
                                    <span class="fw-bold mt-1">Unit Kerja</span>
                                    <p class="card-text">Unit Kerja Pegawai</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3">
                        <div class="card-header">Pegawai yang Dinilai</div>
                        <div class="row g-0 p-0">
                            <div class="col-md-4 my-auto">
                                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8ZW1wbG95ZWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid rounded-start p-1" alt="...">
                            </div>
                            <div class="col-md-8 my-auto">
                                <div class="card-body small">
                                    <span class="fw-bold">NPP</span>
                                    <p class="card-text">180555104120000125</p>
                                    <span class="fw-bold mt-1">Pangkat/Golongan</span>
                                    <p class="card-text">Pangkat/Golongan Pegawai</p>
                                    <span class="fw-bold mt-1">Jabatan</span>
                                    <p class="card-text">Jabatan Pegawai</p>
                                    <span class="fw-bold mt-1">Unit Kerja</span>
                                    <p class="card-text">Unit Kerja Pegawai</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header p-2 d-flex justify-content-center justify-content-lg-start justify-content-sm-start">
                    <ul class="nav nav-pills">
                        <li class="nav-item small"><a class="nav-link active" id="tabAccount" href="#account" data-toggle="tab">SKP</a></li>
                        <li class="nav-item small"><a class="nav-link" id="tabPersonal" href="#personal" data-toggle="tab">Tugas Tambahan & Kreativitas</a></li>
                        <li class="nav-item small"><a class="nav-link" id="tabRole" href="#role" data-toggle="tab">Penilaian Prilaku</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="account">
                            <table id="table_1" class="table table-bordered border-0 table-hover small pb-4">
                                <thead class="text-center small">
                                    <tr class="bg-primary">
                                        <th>No Kegiatan</th>
                                        <th>Kuantitas</th>
                                        <th>Kualitas</th>
                                        <th>Biaya</th>
                                        <th>Perhitungan</th>
                                        <th>Nilai Capaian SKP</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center small">
                                    <tr>
                                        <td>1</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td><span class="badge badge-success">100 Baik</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td><span class="badge badge-danger">20 Buruk</span></td>
                                    </tr>
                                </tbody>
                            </table>   
                        </div>
                        <div class="tab-pane text-end" id="personal">
                            <table id="table_3" class="table table-bordered border-0 table-hover small pb-4">
                                <thead class="text-center small">
                                    <tr class="bg-primary">
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Tugas Tambahan</th>
                                        <th>Deskripsi</th>
                                        <th>Output</th>
                                        <th>File Laporan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center small">
                                    <tr>
                                        <td>1</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table id="table_4" class="table table-bordered border-0 table-hover small">
                                <thead class="text-center small">
                                    <tr class="bg-primary">
                                        <th>Tindakan</th>
                                        <th>Penanda Tanganan SK</th>
                                        <th>Kreativitas</th>
                                        <th>Status Kreativitas</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center small">
                                    <tr>
                                        <td>1</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fas fa-plus"></i> 
                                Tambah Butir Creativitas
                            </button>
                        </div>
                        <div class="tab-pane" id="role">
                            <span class="fw-bold d-flex justify-content-start">Penilaian Prilaku</span>
                            <table id="table_5" class="table table-bordered border-0 table-hover small">
                                <thead class="text-center small">
                                    <tr class="bg-primary">
                                        <th>No</th>
                                        <th>Prilaku Kerja</th>
                                        <th>Nilai</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center small">
                                    <tr>
                                        <td>1</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3"><span class="fw-bold">Jumlah</span></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><span class="fw-bold">Nilai Rata-Rata</span></td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Log Usulan Harian</div>
                <div class="card-body">
                    <table id="table_2" class="table table-bordered border-0 table-hover small">
                        <thead class="text-center small">
                            <tr class="bg-primary">
                                <th>No</th>
                                <th>Aktivitas</th>
                                <th>Tanggal</th>
                                <th>Catatan</th>
                            </tr>
                        </thead>
                        <tbody class="text-center small">
                            <tr>
                                <td>1</td>
                                <td>Belum disetujui</td>
                                <td>14-07-2021 15.14.34</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Belum disetujui</td>
                                <td>14-07-2021 15.14.34</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Belum disetujui</td>
                                <td>14-07-2021 15.14.34</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Start --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Butir Kreativitas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <select class="form-select" aria-label="Pilih">
                            <option selected>Pilih</option>
                            <option value="1">Satu</option>
                            <option value="2">Dua</option>
                            <option value="3">Tiga</option>
                        </select>
                        <input type="email" class="form-control mt-2" placeholder="Masukan kreativitas">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-sm btn-success">Simpan Kreativitas</button>
                    </div>
                </div>
            </div>
        </div>
    {{-- Modal End --}}
@endsection

@push('js')
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#e-kinerja').addClass('menu-open');
            $('#e-kinerja-link').addClass('active');
            $('#kinerja-tahunan').addClass('active');

            $("#table_1").DataTable({
                "responsive": false, "lengthChange": true, "autoWidth": false,
                "searching": false,
                "paging": false,
                "info": false,
            });

            $("#table_2").DataTable({
                "responsive": false, "lengthChange": true, "autoWidth": false,
                "searching": false,
                "paging": false,
                "info": false,
            });

            $("#table_3").DataTable({
                "responsive": false, "lengthChange": true, "autoWidth": false,
                "searching": false,
                "paging": false,
                "info": false,
            });

            $("#table_4").DataTable({
                "responsive": false, "lengthChange": true, "autoWidth": false,
                "searching": false,
                "paging": false,
                "info": false,
            });

            $("#table_5").DataTable({
                "responsive": false, "lengthChange": true, "autoWidth": false,
                "searching": false,
                "paging": false,
                "info": false,
            });
        });
    </script>
@endpush
