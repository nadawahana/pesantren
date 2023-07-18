@extends('masteradmin')
@push('css')
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css">
@endpush
@section('content')
    <!-- partial -->
    <div class="content-wrapper">
        @if (session('message'))
            <div class="alert alert-info mt-4">
                {{ session('message') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="row">
                    <div class="col-12">
                        <h3 class="font-weight-bold">Informasi Pendaftaran</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Calon Santri</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="example" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Nama Santri</th>
                                            <th>NISN</th>
                                            <th>Asal Sekolah</th>
                                            <th>tempat lahir</th>
                                            <th>tanggal lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>jalur masuk</th>
                                            <th>no handphone ayah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $index => $row)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td><img class="img-sm rounded-circle"
                                                        src="{{ asset('storage/files/' . $row->file_name) }}"
                                                        alt="profile"></td>
                                                <td>{{ $row->nama_lengkap }}</td>
                                                <td>{{ $row->nisn }}</td>
                                                <td>{{ $row->asal_sekolah }}</td>
                                                <td>{{ $row->tempat_lahir }}</td>
                                                <td>{{ $row->tanggal_lahir }}</td>
                                                <td>{{ $row->jenkel }}</td>
                                                <td>{{ $row->jalur_masuk }}</td>
                                                <td>{{ $row->hp_ayah }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.
                    Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin
                        template</a> from BootstrapDash. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                    with <i class="ti-heart text-danger ms-1"></i></span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
@endsection
@push('scripts')
    <script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>
    <script>
        $('#example').dataTable({
            fixedColumns: {
                left: 2
            },
            paging: true,
            scrollX: true,
            columnDefs: [{
                "orderable": false,
                "targets": 1
            }]
        });
    </script>
@endpush
