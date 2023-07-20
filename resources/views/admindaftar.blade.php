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
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Jalur Masuk</th>
                                            <th>No Handphone Ayah</th>
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
                                                <td>{{ $row->jenkel == 'laki-laki' ? 'Laki-laki' : 'Perempuan' }}</td>
                                                <td>{{ $row->jalur_masuk == 'asrama' ? 'Asrama' : 'Non Asrama' }}</td>
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
