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
                    <h4 class="card-title">Data Orang Tua Santri</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="example" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Santri</th>
                                            <th>Nama Ayah Kandung</th>
                                            <th>Tempat Lahir Ayah</th>
                                            <th>Tanggal Lahir Ayah</th>
                                            <th>Keterangan Ayah</th>
                                            <th>Pekerjaan Ayah</th>
                                            <th>Penghasilan Ayah</th>
                                            <th>Nama Ibu Kandung</th>
                                            <th>Tempat Lahir Ibu</th>
                                            <th>Tanggal Lahir Ibu</th>
                                            <th>Keterangan Ibu</th>
                                            <th>Pekerjaan Ibu</th>
                                            <th>Penghasilan Ibu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $d)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $d->santri->datasantri->nama_lengkap ?? '-' }}</td>
                                                <td>{{ $d->nama_ayah ?? '-' }}</td>
                                                <td>{{ $d->tempat_lahir_ayah ?? '-' }}</td>
                                                <td>{{ $d->tanggal_lahir_ayah ?? '-' }}</td>
                                                <td>{{ $d->ket_ayah ?? '-' }}</td>
                                                <td>{{ $d->pekerjaan_ayah ?? '-' }}</td>
                                                <td>{{ $d->penghasilan_ayah ?? '-' }}</td>
                                                <td>{{ $d->nama_ibu ?? '-' }}</td>
                                                <td>{{ $d->tempat_lahir_ibu ?? '-' }}</td>
                                                <td>{{ $d->tanggal_lahir_ibu ?? '-' }}</td>
                                                <td>{{ $d->ket_ibu ?? '-' }}</td>
                                                <td>{{ $d->pekerjaan_ibu ?? '-' }}</td>
                                                <td>{{ $d->penghasilan_ibu ?? '-' }}</td>
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
            scrollX: true
        });
    </script>
@endpush
