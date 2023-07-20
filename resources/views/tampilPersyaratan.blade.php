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
                                <table id="example" class="table w-100">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Nama Santri</th>
                                            <th>NISN</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!isset($data))
                                            @foreach ($data as $index => $row)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>
                                                        @if (isset($row->datasantri))
                                                            @if ($datasantri->file_name)
                                                                <img src="{{ asset('storage/files/' . $row->datasantri->file_name) }}"
                                                                    alt="..." class="rounded-circle">
                                                            @endif
                                                        @else
                                                            <img src="{{ asset('images/noimage.jpg') }}"
                                                                class="img-thumbnail">
                                                        @endif
                                                    </td>
                                                    <td>{{ $row->datasantri->nama_lengkap }}</td>
                                                    <td>{{ $row->datasantri->nisn }}</td>
                                                    <td>
                                                        <a href="{{ route('tampilan-persyaratan-detail', $row->id) }}">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
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
            paging: true,
            scrollX: true,
            columnDefs: [{
                "orderable": false,
                "targets": 4
            }]
        });
    </script>
@endpush
